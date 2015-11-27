<?php

namespace spec\Jowy\P2bj\Domain\Services;

use Jowy\P2bj\Domain\Entity\Paket;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PaketServiceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Services\PaketService');
    }

    public function it_can_reject_paket_with_status_pelayanan(Paket $paket)
    {
        $paket->getStatus()->willReturn('pelayanan');
        $paket->setStatus('skpd')->shouldBeCalled();
        $this::tolak($paket);
    }

    public function it_can_reject_paket_with_status_distribusi(Paket $paket)
    {
        $paket->getStatus()->willReturn('distribusi');
        $paket->setStatus('pelayanan')->shouldBeCalled();
        $this::tolak($paket);
    }

    public function it_can_reject_paket_with_status_kaupt(Paket $paket)
    {
        $paket->getStatus()->willReturn('kaupt');
        $paket->setStatus('distribusi')->shouldBeCalled();
        $this::tolak($paket);
    }

    public function it_can_reject_paket_with_status_pokja(Paket $paket)
    {
        $paket->getStatus()->willReturn('pokja');
        $paket->setStatus('kaupt')->shouldBeCalled();
        $this::tolak($paket);
    }

    public function it_can_verify_paket_with_status_pelayanan(Paket $paket)
    {
        $paket->getStatus()->willReturn('pelayanan');
        $paket->setStatus('distribusi')->shouldBeCalled();
        $this::verifikasi($paket);
    }
}
