<?php

namespace spec\Jowy\P2bj\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Jowy\P2bj\Domain\Entity\Paket;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Jowy\P2bj\Domain\Contracts\Repository\PaketRepositoryInterface;

class ArrayPaketRepositorySpec extends ObjectBehavior
{
    public function let(Paket $paket)
    {
        $this->beConstructedWith($paket);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Repository\ArrayPaketRepository');
        $this->shouldImplement(PaketRepositoryInterface::class);
    }

    public function it_should_return_paket_with_status_skpd()
    {
        $this->findByStatus('skpd')->shouldHaveType(ArrayCollection::class);
    }
    public function it_should_return_3_paket_with_status_skpd()
    {
        $this->findByStatus('skpd')->shouldHaveCount(3);
    }
}
