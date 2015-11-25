<?php

namespace Jowy\P2bj\Domain\Entity;

/**
 * Class InfoPaket
 * @package Jowy\P2bj\Domain\Entity
 * @Embeddable
 * @Table(
 *     name="info_paket"
 * )
 */
class InfoPaket
{
    /**
     * @Column(type="string", length=128, nullable=false, name="nama_paket")
     * @var string
     */
    private $namaPaket;

    /**
     * @Column(type="string", length=128, nullable=false, name="sumber_dana")
     * @var string
     */
    private $sumberDana;

    /**
     * @Column(type="integer", nullable=false, name="tahun_anggaran")
     * @var int
     */
    private $tahunAggaran;

    /**
     * @Column(type="float", nullable=false, name="pagu_anggaran")
     * @var float
     */
    private $paguAnggaran;

    /**
     * @Column(type="string", length=128, nullable=false, name="kode_rekening")
     * @var string
     */
    private $kodeRekening;

    /**
     * @Column(type="string", length=128, nullable=false, name="kode_rup")
     * @var string
     */
    private $kodeRup;

    /**
     * @Column(type="string", length=128, nullable=false, name="jenis_pembayaran")
     * @var string
     */
    private $jenisPembayaran;

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
    public function getTahunAggaran()
    {
        return $this->tahunAggaran;
    }

    /**
     * @param int $tahunAggaran
     */
    public function setTahunAggaran($tahunAggaran)
    {
        $this->tahunAggaran = $tahunAggaran;
    }

    /**
     * @return float
     */
    public function getPaguAnggaran()
    {
        return $this->paguAnggaran;
    }

    /**
     * @param float $paguAnggaran
     */
    public function setPaguAnggaran($paguAnggaran)
    {
        $this->paguAnggaran = $paguAnggaran;
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
}
