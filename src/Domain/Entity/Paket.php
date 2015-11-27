<?php

namespace Jowy\P2bj\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Paket
 * @package Jowy\P2bj\Domain\Entity
 * @Entity(repositoryClass="Jowy\P2bj\Domain\Repository\DoctrinePaketRepository")
 * @Table(name="paket")
 * @HasLifecycleCallbacks
 */
class Paket
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Jowy\P2bj\Domain\Entity\User", inversedBy="paket", fetch="EAGER")
     * @JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * @var User
     */
    private $user;

    /**
     * @Embedded(class="Jowy\P2bj\Domain\Entity\InfoPaket")
     * @var InfoPaket
     */
    private $infoPaket;

    /**
     * @OneToMany(targetEntity="Jowy\P2bj\Domain\Entity\Dokumen", mappedBy="paket", fetch="EXTRA_LAZY", cascade={"persist"})
     * @var ArrayCollection|Dokumen[]
     */
    private $dokumen;

    /**
     * targetEntity="Jowy\P2bj\Domain\Entity\Dokumen", mappedBy="paket", fetch="EXTRA_LAZY", cascade={"persist"}
     * @var ArrayCollection|Log[]
     */
    private $log;

    /**
     * @Column(type="string", length=128, nullable=false, name="status")
     * @var string
     */
    private $status;

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
     * constructor
     */
    public function __construct()
    {
        $this->dokumen = new ArrayCollection();
        $this->log = new ArrayCollection();
    }

    /**
     * @param User $user
     * @param InfoPaket $infoPaket
     * @param ArrayCollection $dokumen
     * @return Paket
     */
    public static function create(User $user, InfoPaket $infoPaket, ArrayCollection $dokumen)
    {
        $paket = new Paket();

        $paket->setCreatedAt(new \DateTime());
        $paket->user = $user;
        $paket->infoPaket = $infoPaket;
        $paket->dokumen = $dokumen;
        $paket->status = 'p2bj';

        return $paket;
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
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return InfoPaket
     */
    public function getInfoPaket()
    {
        return $this->infoPaket;
    }

    /**
     * @param InfoPaket $infoPaket
     */
    public function setInfoPaket($infoPaket)
    {
        $this->infoPaket = $infoPaket;
    }

    /**
     * @return ArrayCollection
     */
    public function getDokumen()
    {
        return $this->dokumen;
    }

    /**
     * @param ArrayCollection $dokumen
     */
    public function setDokumen($dokumen)
    {
        $this->dokumen = $dokumen;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return ArrayCollection
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @param ArrayCollection $log
     */
    public function setLog($log)
    {
        $this->log = $log;
    }

    /**
     * @param Log $log
     */
    public function addLog(Log $log)
    {
        $this->log[] = $log;
    }
}
