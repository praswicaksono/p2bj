<?php

namespace spec\Jowy\P2bj\Domain\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InfoPaketSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Entity\InfoPaket');
    }
}
