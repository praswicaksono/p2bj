<?php

namespace Jowy\P2bj\Domain\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Dokumen
 * @package Jowy\P2bj\Domain\Entity
 * @Entity(repositoryClass="Jowy\P2bj\Domain\Repository\DoctrineDokumenRepository")
 * @Table(name="dokumen")
 * @HasLifecycleCallbacks
 */
class Dokumen
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="text", nullable=false)
     * @var string
     */
    private $description;

    /**
     * @Column(type="text", nullable=false)
     * @var string
     */
    private $filename;

    /**
     * @ManyToOne(targetEntity="Jowy\P2bj\Domain\Entity\Paket", inversedBy="dokumen", fetch="EAGER", cascade={"persist"})
     * @JoinColumn(name="paket_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * @var Paket
     */
    private $paket;

    /**
     * @Column(type="datetime", name="created_at", nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime", name="updated_at", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var UploadedFile
     */
    private $file;

    /**
     * @param $description
     * @param UploadedFile $file
     * @param Paket $paket
     * @return Dokumen
     */
    public static function create($description, UploadedFile $file, Paket $paket)
    {
        $fileName = uniqid() . '.' . $file->guessExtension();

        $dokumen = new Dokumen();

        $dokumen->setCreatedAt(new \DateTime());
        $dokumen->setDescription($description);
        $dokumen->setFile($file);
        $dokumen->setFilename($fileName);
        $dokumen->setPaket($paket);

        return $dokumen;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    /**
     * @return Paket
     */
    public function getPaket()
    {
        return $this->paket;
    }

    /**
     * @param Paket $paket
     */
    public function setPaket(Paket $paket)
    {
        $this->paket = $paket;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @PrePersist
     * @return void
     */
    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }
    /**
     * @PreUpdate
     * @return void
     */
    public function timestampableUpdateEvent()
    {
        $this->updatedAt = new \DateTime();
    }
}
