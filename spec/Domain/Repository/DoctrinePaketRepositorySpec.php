<?php

namespace spec\Jowy\P2bj\Domain\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Jowy\P2bj\Domain\Contracts\Repository\PaketRepositoryInterface;
use Doctrine\ORM\EntityRepository;

class DoctrinePaketRepositorySpec extends ObjectBehavior
{
    public function let(EntityManager $em, ClassMetadata $meta)
    {
        $this->beConstructedWith($em, $meta);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Repository\DoctrinePaketRepository');
        $this->shouldBeAnInstanceOf(EntityRepository::class);
        $this->shouldImplement(PaketRepositoryInterface::class);
    }
}
