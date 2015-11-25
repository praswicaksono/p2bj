<?php

namespace Jowy\P2bj\Domain\Services;

use Jowy\P2bj\Domain\Entity\User;

/**
 * Class UserPasswordMatcher
 * @package Jowy\P2bj\Domain\Services
 */
class UserPasswordMatcher
{
    /**
     * @var string
     */
    private $rawPassword;

    /**
     * @var User
     */
    private $user;

    /**
     * @param string $rawPassword
     * @param User $user
     */
    public function __construct($rawPassword, User $user)
    {
        $this->rawPassword = $rawPassword;
        $this->user = $user;
    }

    /**
     * @return bool
     */
    public function match()
    {
        return password_verify($this->rawPassword, $this->user->getPassword());
    }
}
