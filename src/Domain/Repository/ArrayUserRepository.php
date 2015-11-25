<?php

namespace Jowy\P2bj\Domain\Repository;

use Jowy\P2bj\Domain\Contracts\Repository\UserRepositoryInterface;
use Jowy\P2bj\Domain\Entity\User;

/**
 * Class ArrayUserRepository
 * @package Jowy\P2bj\Domain\Repository
 */
class ArrayUserRepository implements UserRepositoryInterface
{
    /**
     * @param $id
     * @return User
     */
    public function findById($id)
    {
        return User::create('user', 'password', 'skpd');
    }

    public function findByUsername($username)
    {
        return User::create('user', 'password', 'skpd');
    }
}
