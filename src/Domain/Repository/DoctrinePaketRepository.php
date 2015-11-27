<?php

namespace Jowy\P2bj\Domain\Repository;

use Doctrine\ORM\EntityRepository;
use Jowy\P2bj\Domain\Contracts\Repository\PaketRepositoryInterface;
use Jowy\P2bj\Domain\Entity\Paket;

/**
 * Class DoctrinePaketRepository
 * @package Jowy\P2bj\Domain\Repository
 */
class DoctrinePaketRepository extends EntityRepository implements PaketRepositoryInterface
{
    /**
     * @param $id
     * @return Paket
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @param $status
     * @return Paket[]
     */
    public function findByStatus($status)
    {
        return $this->findBy([
            'status' => $status
        ]);
    }
}
