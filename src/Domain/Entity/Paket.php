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
     * @OneToMany(targetEntity="Jowy\P2bj\Domain\Entity\Dokumen", mappedBy="paket", fetch="EAGER", cascade={"persist"})
     * @var ArrayCollection
     */
    private $dokumen;

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
        $this->created_at = new \DateTime();
    }
    /**
     * @PreUpdate
     * @return void
     */
    public function timestampableUpdateEvent()
    {
        $this->updated_at = new \DateTime();
    }
}
