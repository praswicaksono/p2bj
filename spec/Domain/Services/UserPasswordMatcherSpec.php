<?php

namespace spec\Jowy\P2bj\Domain\Services;

use Jowy\P2bj\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserPasswordMatcherSpec extends ObjectBehavior
{
    public function let(User $user)
    {
        $this->beConstructedWith('password', $user);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Services\UserPasswordMatcher');
    }

    public function it_should_return_true_when_password_match(User $user)
    {
        $user->getPassword()->shouldBeCalled()->willReturn(password_hash('password', PASSWORD_DEFAULT));
        $this->match()->shouldReturn(true);
    }

    public function it_return_false_when_password_is_not_match(User $user)
    {
        $user->getPassword()->shouldBeCalled()->willReturn(password_hash('password', PASSWORD_DEFAULT));
        $this->beConstructedWith('invalid', $user);
        $this->match()->shouldReturn(false);
    }
}
