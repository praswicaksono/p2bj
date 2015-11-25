<?php

namespace Jowy\P2bj\Domain\Contracts\Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Jowy\P2bj\Domain\Entity\Paket;

/**
 * Interface PaketRepositoryInterface
 * @package Jowy\P2bj\Domain\Contracts\Repository
 */
interface PaketRepositoryInterface
{
    /**
     * @param $id
     * @return Paket
     */
    public function findById($id);

    /**
     * @param $status
     * @return ArrayCollection
     */
    public function findByStatus($status);
}
