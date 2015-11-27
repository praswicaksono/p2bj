<?php

namespace spec\Jowy\P2bj\Domain\Event;

use Jowy\P2bj\Domain\Entity\Paket;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\EventDispatcher\Event;

class SkpdTelahMengirimPaketSpec extends ObjectBehavior
{
    public function let(Paket $paket)
    {
        $this->beConstructedWith($paket);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Event\SkpdTelahMengirimPaket');
        $this->shouldHaveType(Event::class);
    }
}
