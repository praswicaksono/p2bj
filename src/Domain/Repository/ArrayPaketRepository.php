<?php

namespace Jowy\P2bj\Domain\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Jowy\P2bj\Domain\Contracts\Repository\PaketRepositoryInterface;
use Jowy\P2bj\Domain\Entity\Paket;

class ArrayPaketRepository implements PaketRepositoryInterface
{
    private $arrayCollection;

    public function __construct(Paket $paket)
    {
        $this->arrayCollection = new ArrayCollection();
        $this->arrayCollection->add($paket);
        $this->arrayCollection->add($paket);
        $this->arrayCollection->add($paket);
    }
    public function findByStatus($argument1)
    {
        return $this->arrayCollection;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
