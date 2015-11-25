<?php


namespace Jowy\P2bj\Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Jowy\P2bj\Domain\Contracts\Repository\UserRepositoryInterface;

/**
 * Class DoctrineUserRepository
 * @package Jowy\P2bj\Domain\Repository
 */
class DoctrineUserRepository extends EntityRepository implements UserRepositoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findByUsername($username)
    {
        return $this->findOneBy([
            'username' => $username
        ]);
    }
}
