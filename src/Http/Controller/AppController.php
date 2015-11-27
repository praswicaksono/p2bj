<?php

namespace Jowy\P2bj\Http\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Jowy\P2bj\Domain\Entity\Dokumen;
use Jowy\P2bj\Domain\Entity\InfoPaket;
use Jowy\P2bj\Domain\Entity\Paket;
use Jowy\P2bj\Domain\Entity\User;
use Jowy\P2bj\Domain\Services\UserPasswordMatcher;
use Jowy\P2bj\Http\Form\LoginForm;
use Jowy\P2bj\Http\Form\SkpdForm;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AppController
 * @package Jowy\P2bj\Http\Controller
 */
class AppController implements ControllerProviderInterface
{
    /**
     * @var Application
     */
    private $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param Application $app
     * @return ControllerCollection
     */
    public function connect(Application $app)
    {
        /**
         * @var ControllerCollection $controllers
         */
        $controllers = $app['controllers_factory'];

        $controllers->match('/login', [$this, 'loginAction'])
            ->before([$this,'checkUserRole'])
            ->bind('login');

        $controllers->match('/skpd', [$this, 'skpdAction'])
            ->before([$this, 'checkSkpdRole'])
            ->bind('skpd');

        $controllers->get('/beranda', [$this, 'berandaAction'])
            ->before([$this, 'checkUserRole'])
            ->bind('beranda');

        $controllers->get('/logout', [$this, 'logoutAction'])
            ->bind('logout');

        $controllers->get('/list', [$this, 'showPaketByStatusAction'])
            ->bind('listPaket');

        return $controllers;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|void
     */
    public function checkSkpdRole()
    {
        $role = $this->app['session']->get('role');

        if ($role['value'] !== 'skpd') {
            $this->app['session']->getFlashBag()->add(
                'message_error',
                'Anda tidak berhak mengakses fitur ini'
            );
            return $this->app->redirect($this->app["url_generator"]->generate("login"));
        }
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|void
     */
    public function checkUserRole(Request $request)
    {
        if ($request->getPathInfo() === '/login' && $this->app['session']->has('username')) {
            return $this->app->redirect($this->app["url_generator"]->generate("beranda"));
        }

        if (! $this->app['session']->has('username') && ! ($request->getPathInfo() === '/login')) {
            return $this->app->redirect($this->app["url_generator"]->generate("login"));
        }
    }

    /**
     * @return string
     */
    public function berandaAction()
    {
        return $this->app['twig']->render('beranda.twig');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function skpdAction(Request $request)
    {
        $skpdForm = new SkpdForm();
        $formBuilder = $this->app['form.factory']->create($skpdForm, $skpdForm);

        if ($request->getMethod() === 'GET') {
            return $this->app['twig']->render('skpd.twig', ['form' => $formBuilder->createView()]);
        }

        $formBuilder->handleRequest($request);

        if (! $formBuilder->isValid()) {
            return $this->app['twig']->render('skpd.twig', ['form' => $formBuilder->createView()]);
        }

        $infoPaket = new InfoPaket();
        $infoPaket->setNamaPaket($skpdForm->getNamaPaket());
        $infoPaket->setSumberDana($skpdForm->getSumberDana());
        $infoPaket->setTahunAggaran($skpdForm->getTahunAnggaran());
        $infoPaket->setPaguAnggaran($skpdForm->getPaguAnggraran());
        $infoPaket->setKodeRekening($skpdForm->getKodeRekening());
        $infoPaket->setKodeRup($skpdForm->getKodeRup());
        $infoPaket->setJenisPembayaran($skpdForm->getJenisPembayaran());

        /**
         * @var User
         */
        $user = $this->app['user.repository']->findByUsername(
            $this->app['session']->get('username')['value']
        );

        $files = new ArrayCollection();

        $paket = Paket::create($user, $infoPaket, $files);

        $files->add(Dokumen::create(
            'Surat Permintaan Lelang dan SKPD',
            $skpdForm->getDokumenSuratPermintaanLelang(),
            $paket
        ));

        $files->add(Dokumen::create(
            'Hasil Perkiraan Sendiri',
            $skpdForm->getDokumenHasilPerkiraanSendiri(),
            $paket
        ));

        $files->add(Dokumen::create(
            'Cetak RUP',
            $skpdForm->getDokumenCetakRup(),
            $paket
        ));

        $files->add(
            Dokumen::create(
                'Kerangka Acuan Kerja',
                $skpdForm->getDokumenKerangkaAcuanKerja(),
                $paket
            )
        );

        $files->add(
            Dokumen::create(
                'Daftar Kuantitas',
                $skpdForm->getDokumenDaftarKuantitas(),
                $paket
            )
        );

        $files->add(
            Dokumen::create(
                'Spesifikasi Teknis',
                $skpdForm->getDokumenSpesifikasiTeknis(),
                $paket
            )
        );

        $files->add(
            Dokumen::create(
                'Gambar',
                $skpdForm->getDokumenGambar(),
                $paket
            )
        );

        $files->add(
            Dokumen::create(
                'Rancangan Kontrak',
                $skpdForm->getDokumenRancanganKontrak(),
                $paket
            )
        );

        $files->add(
            Dokumen::create(
                'Syarat-Syarat Umum Kontrak',
                $skpdForm->getDokumenSyaratSyaratUmumKontrak(),
                $paket
            )
        );

        $files->add(
            Dokumen::create(
                'Syarat-Sayarat Khusus Kontrak',
                $skpdForm->getDokumenSyaratSyaratKhususKontrak(),
                $paket
            )
        );

        $files->add(
            Dokumen::create(
                'Dokumen Pendukung Lain',
                $skpdForm->getDokumenPendukungLain(),
                $paket
            )
        );

        $paket->setDokumen($files);

        $this->app['orm.em']->persist($paket);
        $this->app['orm.em']->flush();

        /**
         * move uploaded file
         */
        $dirName = $this->app['dokumen.path'] . '/' . $paket->getId();
        mkdir($dirName, 0755);

        foreach ($files as $dokumen) {
            /**
             * @var Dokumen $dokumen
             */
            $dokumen->getFile()->move($dirName, $dokumen->getFilename());
        }

        return $this->app['twig']->render('skpd.twig', ['form' => $formBuilder->createView()]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function loginAction(Request $request)
    {
        $loginForm = new LoginForm();
        $formBuilder = $this->app['form.factory']->create($loginForm, $loginForm);

        if ($request->getMethod() === 'GET') {
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $formBuilder->handleRequest($request);

        if (! $formBuilder->isValid()) {
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $user = $this->app['user.repository']->findByUsername($loginForm->getUsername());

        if ($user === null) {
            $this->app['session']->getFlashBag()->add(
                'message_error',
                'Username tidak ditemukan'
            );
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        /**
         * @var User $user
         */
        if (! (new UserPasswordMatcher($loginForm->getPassword(), $user))->match()) {
            $this->app['session']->getFlashBag()->add(
                'message_error',
                'Password salah'
            );
            return $this->app['twig']->render('login.twig', ['form' => $formBuilder->createView()]);
        }

        $this->app['session']->set('role', ['value' => $user->getRole()]);
        $this->app['session']->set('username', ['value' => $user->getUsername()]);
        $this->app['session']->set('uid', ['value' => $user->getId()]);
        $sessionLifetime = (int) $this->app['session.life'];
        $this->app['session']->set('expire', ['value' => time() + $sessionLifetime]);

        return $this->app->redirect($this->app['url_generator']->generate($user->getRole()));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function logoutAction()
    {
        $this->app['session']->clear();
        $this->app['session']->getFlashBag()->add(
            'message_success',
            'Sukses melakukan logout'
        );
        return $this->app->redirect($this->app['url_generator']->generate('login'));
    }
}
