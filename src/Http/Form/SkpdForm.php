<?php

namespace Jowy\P2bj\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SkpdForm
 * @package Jowy\P2bj\Http\Form
 */
class SkpdForm extends AbstractType
{
    /**
     * @var string
     */


    private $namaPaket;

    /**
     * @var string
     */
    private $sumberDana;

    /**
     * @var int
     */
    private $tahunAnggaran;

    /**
     * @var float
     */
    private $paguAnggraran;

    /**
     * @var string
     */
    private $kodeRekening;

    /**
     * @var string
     */
    private $kodeRup;

    /**
     * @var string
     */
    private $jenisPembayaran;

    /**
     * @var UploadedFile
     */
    private $dokumenSuratPermintaanLelang;

    /**
     * @var UploadedFile
     */
    private $dokumenHasilPerkiraanSendiri;

    /**
     * @var UploadedFile
     */
    private $dokumenCetakRup;

    /**
     * @var UploadedFile
     */
    private $dokumenKerangkaAcuanKerja;

    /**
     * @var UploadedFile
     */
    private $dokumenDaftarKuantitas;

    /**
     * @var UploadedFile
     */
    private $dokumenSpesifikasiTeknis;

    /**
     * @var UploadedFile
     */
    private $dokumenGambar;

    /**
     * @var UploadedFile
     */
    private $dokumenRancanganKontrak;

    /**
     * @var UploadedFile
     */
    private $dokumenSyaratSyaratUmumKontrak;

    /**
     * @var UploadedFile
     */
    private $dokumenSyaratSyaratKhususKontrak;

    /**
     * @var UploadedFile
     */
    private $dokumenPendukungLain;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'namaPaket',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => [
                    'class' => 'gui-input',
                    'placeholder'=>'Nama Paket Pekerjaan'
                ]
            ]
        )->add(
            'sumberDana',
            'choice',
            [
                'constraints' => new Assert\NotBlank(),
                'choice_list' => new ChoiceList(
                    ['APBD','BUMN','MANDIRI'],
                    ['APBD','BUMN','MANDIRI']
                ),
                'placeholder' => '-- Sumber Dana --',
                'empty_data' => null,
                'attr' => ['class' => 'select']
            ]
        )->add(
            'tahunAnggaran',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => [
                    'placeholder' => 'Tahun Anggaran',
                    'class' => 'gui-input'
                ]
            ]
        )->add(
            'paguAnggraran',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => [
                    'placeholder' => 'Pagu Anggaran',
                    'class' => 'gui-input'
                ]
            ]
        )->add(
            'kodeRekening',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => [
                    'class' => 'gui-input',
                    'placeholder' => 'Kode Rekening / MAK'
                ]
            ]
        )->add(
            'kodeRup',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => [
                    'class' => 'gui-input',
                    'placeholder' => 'Kode RUP (ID Paket)'
                ]
            ]
        )->add(
            'jenisPembayaran',
            'text',
            [
                'constraints' => new Assert\NotBlank(),
                'attr' => [
                    'class' => 'gui-input',
                    'placeholder' => 'Jenis Kontrak (Cara Pembayaran)'
                ]
            ]
        )->add(
            'dokumenSuratPermintaanLelang',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenHasilPerkiraanSendiri',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenCetakRup',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenKerangkaAcuanKerja',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenDaftarKuantitas',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenSpesifikasiTeknis',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenGambar',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenRancanganKontrak',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenSyaratSyaratUmumKontrak',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenSyaratSyaratKhususKontrak',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'dokumenPendukungLain',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\File([
                        'maxSize' => '10m'
                    ])
                ],
                'attr' => [
                    'class' => 'gui-file'
                ]
            ]
        )->add(
            'kirim',
            'submit',
            [
                'attr' => [
                    'class' => 'btn btn-success mr10 pull-right'
                ],
                'label' => 'Proses Pengajuan'
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'skpd_form';
    }

    /**
     * @return string
     */
    public function getNamaPaket()
    {
        return $this->namaPaket;
    }

    /**
     * @param string $namaPaket
     */
    public function setNamaPaket($namaPaket)
    {
        $this->namaPaket = $namaPaket;
    }

    /**
     * @return string
     */
    public function getSumberDana()
    {
        return $this->sumberDana;
    }

    /**
     * @param string $sumberDana
     */
    public function setSumberDana($sumberDana)
    {
        $this->sumberDana = $sumberDana;
    }

    /**
     * @return int
     */
    public function getTahunAnggaran()
    {
        return $this->tahunAnggaran;
    }

    /**
     * @param int $tahunAnggaran
     */
    public function setTahunAnggaran($tahunAnggaran)
    {
        $this->tahunAnggaran = $tahunAnggaran;
    }

    /**
     * @return float
     */
    public function getPaguAnggraran()
    {
        return $this->paguAnggraran;
    }

    /**
     * @param float $paguAnggraran
     */
    public function setPaguAnggraran($paguAnggraran)
    {
        $this->paguAnggraran = $paguAnggraran;
    }

    /**
     * @return string
     */
    public function getKodeRekening()
    {
        return $this->kodeRekening;
    }

    /**
     * @param string $kodeRekening
     */
    public function setKodeRekening($kodeRekening)
    {
        $this->kodeRekening = $kodeRekening;
    }

    /**
     * @return string
     */
    public function getKodeRup()
    {
        return $this->kodeRup;
    }

    /**
     * @param string $kodeRup
     */
    public function setKodeRup($kodeRup)
    {
        $this->kodeRup = $kodeRup;
    }

    /**
     * @return string
     */
    public function getJenisPembayaran()
    {
        return $this->jenisPembayaran;
    }

    /**
     * @param string $jenisPembayaran
     */
    public function setJenisPembayaran($jenisPembayaran)
    {
        $this->jenisPembayaran = $jenisPembayaran;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenSuratPermintaanLelang()
    {
        return $this->dokumenSuratPermintaanLelang;
    }

    /**
     * @param UploadedFile $dokumenSuratPermintaanLelang
     */
    public function setDokumenSuratPermintaanLelang($dokumenSuratPermintaanLelang)
    {
        $this->dokumenSuratPermintaanLelang = $dokumenSuratPermintaanLelang;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenHasilPerkiraanSendiri()
    {
        return $this->dokumenHasilPerkiraanSendiri;
    }

    /**
     * @param UploadedFile $dokumenHasilPerkiraanSendiri
     */
    public function setDokumenHasilPerkiraanSendiri($dokumenHasilPerkiraanSendiri)
    {
        $this->dokumenHasilPerkiraanSendiri = $dokumenHasilPerkiraanSendiri;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenCetakRup()
    {
        return $this->dokumenCetakRup;
    }

    /**
     * @param UploadedFile $dokumenCetakRup
     */
    public function setDokumenCetakRup($dokumenCetakRup)
    {
        $this->dokumenCetakRup = $dokumenCetakRup;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenKerangkaAcuanKerja()
    {
        return $this->dokumenKerangkaAcuanKerja;
    }

    /**
     * @param UploadedFile $dokumenKerangkaAcuanKerja
     */
    public function setDokumenKerangkaAcuanKerja($dokumenKerangkaAcuanKerja)
    {
        $this->dokumenKerangkaAcuanKerja = $dokumenKerangkaAcuanKerja;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenDaftarKuantitas()
    {
        return $this->dokumenDaftarKuantitas;
    }

    /**
     * @param UploadedFile $dokumenDaftarKuantitas
     */
    public function setDokumenDaftarKuantitas($dokumenDaftarKuantitas)
    {
        $this->dokumenDaftarKuantitas = $dokumenDaftarKuantitas;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenSpesifikasiTeknis()
    {
        return $this->dokumenSpesifikasiTeknis;
    }

    /**
     * @param UploadedFile $dokumenSpesifikasiTeknis
     */
    public function setDokumenSpesifikasiTeknis($dokumenSpesifikasiTeknis)
    {
        $this->dokumenSpesifikasiTeknis = $dokumenSpesifikasiTeknis;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenGambar()
    {
        return $this->dokumenGambar;
    }

    /**
     * @param UploadedFile $dokumenGambar
     */
    public function setDokumenGambar($dokumenGambar)
    {
        $this->dokumenGambar = $dokumenGambar;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenRancanganKontrak()
    {
        return $this->dokumenRancanganKontrak;
    }

    /**
     * @param UploadedFile $dokumenRancanganKontrak
     */
    public function setDokumenRancanganKontrak($dokumenRancanganKontrak)
    {
        $this->dokumenRancanganKontrak = $dokumenRancanganKontrak;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenSyaratSyaratUmumKontrak()
    {
        return $this->dokumenSyaratSyaratUmumKontrak;
    }

    /**
     * @param UploadedFile $dokumenSyaratSyaratUmumKontrak
     */
    public function setDokumenSyaratSyaratUmumKontrak($dokumenSyaratSyaratUmumKontrak)
    {
        $this->dokumenSyaratSyaratUmumKontrak = $dokumenSyaratSyaratUmumKontrak;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenSyaratSyaratKhususKontrak()
    {
        return $this->dokumenSyaratSyaratKhususKontrak;
    }

    /**
     * @param UploadedFile $dokumenSyaratSyaratKhususKontrak
     */
    public function setDokumenSyaratSyaratKhususKontrak($dokumenSyaratSyaratKhususKontrak)
    {
        $this->dokumenSyaratSyaratKhususKontrak = $dokumenSyaratSyaratKhususKontrak;
    }

    /**
     * @return UploadedFile
     */
    public function getDokumenPendukungLain()
    {
        return $this->dokumenPendukungLain;
    }

    /**
     * @param UploadedFile $dokumenPendukungLain
     */
    public function setDokumenPendukungLain($dokumenPendukungLain)
    {
        $this->dokumenPendukungLain = $dokumenPendukungLain;
    }
}
