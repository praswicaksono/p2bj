<?php

namespace spec\Jowy\P2bj\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Jowy\P2bj\Domain\Entity\Dokumen;
use Jowy\P2bj\Domain\Entity\InfoPaket;
use Jowy\P2bj\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PaketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Entity\Paket');
    }

    public function it_can_create_new_paket(User $user, InfoPaket $infoPaket, Dokumen $dokumen)
    {
        $this->beConstructedWith($user, $infoPaket, (new ArrayCollection())->add($dokumen));
    }
}
