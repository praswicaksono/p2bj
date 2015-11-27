<?php

namespace Jowy\P2bj\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Users
 * @package Jowy\P2bj\Domain\Entity
 * @Entity(repositoryClass="Jowy\P2bj\Domain\Repository\DoctrineUserRepository")
 * @Table(name="user")
 * @HasLifecycleCallbacks
 */
class User
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="string", length=128, nullable=false)
     * @var string
     */
    private $username;

    /**
     * @Column(type="string", length=128, nullable=false)
     * @var string
     */
    private $password;

    /**
     * @Column(type="string", length=128, nullable=false)
     * @var string
     */
    private $role;

    /**
     * @OneToMany(targetEntity="Jowy\P2bj\Domain\Entity\Paket", mappedBy="user", fetch="EXTRA_LAZY")
     * @var ArrayCollection|Paket[]
     */
    private $paket;

    /**
     * @OneToMany(targetEntity="Jowy\P2bj\Domain\Entity\Log", mappedBy="user", fetch="EXTRA_LAZY")
     * @var ArrayCollection|Log[]
     */
    private $log;

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
        $this->paket = new ArrayCollection();
    }

    /**
     * @param $username
     * @param $password
     * @param $role
     * @return User
     */
    public static function create($username, $password, $role)
    {
        $users = new User();

        $users->setUsername($username);
        $users->setPassword($password);
        $users->setRole($role);
        $users->setCreatedAt(new \DateTime());

        return $users;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
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
     * @param Paket $paket
     */
    public function addPaket(Paket $paket)
    {
        $this->paket[] = $paket;
    }

    /**
     * @return ArrayCollection
     */
    public function getPaket()
    {
        return $this->paket;
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
