<?php

namespace spec\Jowy\P2bj\Domain\Entity;

use Jowy\P2bj\Domain\Entity\Paket;
use Jowy\P2bj\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LogSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Entity\Log');
    }

    public function it_can_create_new_log(User $user, Paket $paket)
    {
        $this->beConstructedCreate('Message', $user, $paket);
        $this->getPesan()->shouldReturn('Message');
    }
}
