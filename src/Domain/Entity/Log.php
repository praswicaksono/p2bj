<?php

namespace Jowy\P2bj\Domain\Entity;

/**
 * Class Log
 * @package Jowy\P2bj\Domain\Entity
 * @Entity(repositoryClass="Jowy\P2bj\Domain\Repository\DoctrineLogRepository")
 * @Table(name="log")
 * @HasLifecycleCallbacks
 */
class Log
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
    private $pesan;

    /**
     * @ManyToOne(targetEntity="Jowy\P2bj\Domain\Entity\User", inversedBy="log", fetch="EAGER", cascade={"persist"})
     * @JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * @var User
     */
    private $user;

    /**
     * @ManyToOne(targetEntity="Jowy\P2bj\Domain\Entity\Paket", inversedBy="log", fetch="EAGER", cascade={"persist"})
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
     * @param $pesan
     * @param User $user
     * @param Paket $paket
     * @return Log
     */
    public static function create($pesan, User $user, Paket $paket)
    {
        $log = new Log();

        $log->setPesan($pesan);
        $log->setPaket($paket);
        $log->setUser($user);
        $log->setCreatedAt(new \DateTime());

        return $log;
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
    public function getPesan()
    {
        return $this->pesan;
    }

    /**
     * @param string $pesan
     */
    public function setPesan($pesan)
    {
        $this->pesan = $pesan;
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
    public function setUser(User $user)
    {
        $this->user = $user;
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
