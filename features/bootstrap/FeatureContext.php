<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Jowy\P2bj\Domain\Repository\ArrayUserRepository;
use Jowy\P2bj\Domain\Entity\User;
use Jowy\P2bj\Domain\Entity\InfoPaket;
use Jowy\P2bj\Domain\Entity\Dokumen;
use Jowy\P2bj\Domain\Entity\Paket;
use Behat\Behat\Tester\Exception\PendingException;
use Doctrine\Common\Collections\ArrayCollection;
use Jowy\P2bj\Domain\Contracts\Repository\PaketRepositoryInterface;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Jowy\P2bj\Domain\Repository\ArrayPaketRepository;
use Jowy\P2bj\Domain\Entity\Log;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var InfoPaket
     */
    private $infoPaket;

    /**
     * @var ArrayUserRepository
     */
    private $userRepository;

    /**
     * @var ArrayCollection
     */
    private $fileCollection;

    /**
     * @var Paket
     */
    private $paket;

    /**
     * @var Paket[]
     */
    private $paketCollection;

    /**
     * @var PaketRepositoryInterface
     */
    private $paketRepository;

    private $log;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->userRepository = new ArrayUserRepository();
        $this->fileCollection = new ArrayCollection();
    }

    /**
     * @Given User sudah teregistrasi di system dengan user id :userId dengan role :role
     */
    public function userSudahTeregistrasiDiSystemDenganUserIdDenganRole($userId, $role)
    {
        $this->user = $this->userRepository->findById($userId);
        $this->infoPaket = new InfoPaket();
    }

    /**
     * @When User mengisi Nama Paket dengan :value
     */
    public function userMengisiNamaPaketDengan($value)
    {
        $this->infoPaket->setNamaPaket($value);
    }

    /**
     * @When User mengisi Sumber Dana dengan :value
     */
    public function userMengisiSumberDanaDengan($value)
    {
        $this->infoPaket->setSumberDana($value);
    }

    /**
     * @When User mengisi Tahun Anggaran dengan :value
     */
    public function userMengisiTahunAnggaranDengan($value)
    {
        $this->infoPaket->setTahunAggaran($value);
    }

    /**
     * @When User mengisi Pagu Anggaran dengan :value
     */
    public function userMengisiPaguAnggaranDengan($value)
    {
        $this->infoPaket->setPaguAnggaran($value);
    }

    /**
     * @When User mengisi Kode Rekening dengan :value
     */
    public function userMengisiKodeRekeningDengan($value)
    {
        $this->infoPaket->setKodeRekening($value);
    }

    /**
     * @When User mengisi Kode RUP dengan :value
     */
    public function userMengisiKodeRupDengan($value)
    {
        $this->infoPaket->setKodeRup($value);
    }

    /**
     * @When User mengisi Jenis Pembayaran dengan :value
     */
    public function userMengisiJenisPembayaranDengan($value)
    {
        $this->infoPaket->setJenisPembayaran($value);
    }

    /**
     * @When User mengupload :description dengan nama file :filename
     */
    public function userMenguploadDenganNamaFile($description, $filename)
    {
        $this->fileCollection->add(new Dokumen($description, $filename));
    }

    /**
     * @When User mengirim aplikasi paket kepada :actor
     */
    public function userMengirimAplikasiPaketKepada($actor)
    {
        $this->paket = Paket::create($this->user, $this->infoPaket, $this->fileCollection);
    }

    /**
     * @Then Status paket harusnya berisi :value
     */
    public function statusPaketHarusnyaBerisi($value)
    {
        assert($this->paket->getStatus() === $value);
    }

    /**
     * @When User melihat page list paket
     */
    public function userMelihatPageListPaket()
    {
        $paket = Paket::create(
            User::create('username', 'password', 'skpd'),
            new InfoPaket(),
            new ArrayCollection()
        );

        $this->paketRepository = new ArrayPaketRepository($paket);
    }

    /**
     * @Then User dapat melihat paket dengan status :status
     */
    public function userDapatMelihatPaketDenganStatus($status)
    {
         $this->paketCollection = $this->paketRepository->findByStatus($status);

    }

    /**
     * @Then System otomatis mencatat log
     */
    public function systemOtomatisMencatatLog()
    {
        $this->log = Log::create('Message', $this->user, $this->paket);
    }
}
