<?php

namespace Jowy\P2bj\Domain\Contracts\Repository;
use Jowy\P2bj\Domain\Entity\User;

/**
 * Interface UserRepositoryInterface
 * @package Jowy\P2bj\Domain\Contracts\Repository
 */
interface UserRepositoryInterface
{
    /**
     * @param $id
     * @return User
     */
    public function findById($id);

    /**
     * @param $username
     * @return User
     */
    public function findByUsername($username);
}
