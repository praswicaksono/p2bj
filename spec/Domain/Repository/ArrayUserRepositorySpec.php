<?php

namespace spec\Jowy\P2bj\Domain\Repository;

use Jowy\P2bj\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayUserRepositorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Repository\ArrayUserRepository');
        $this->shouldImplement('Jowy\P2bj\Domain\Contracts\Repository\UserRepositoryInterface');
    }

    public function it_should_return_instance_when_user_is_found()
    {
        $this->findById('1')->shouldHaveType(User::class);
    }
}
