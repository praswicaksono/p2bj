<?php

namespace spec\Jowy\P2bj\Domain\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UsersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Entity\User');
    }

    public function it_can_create_new_user()
    {
        $this->beConstructedCreate('username', 'password', 'role');
        $this->getUsername()->shouldReturn('username');
        $this->getRole()->shouldReturn('role');
    }
}
