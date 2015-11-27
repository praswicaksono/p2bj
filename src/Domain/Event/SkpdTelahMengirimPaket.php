<?php

namespace Jowy\P2bj\Domain\Event;

use Jowy\P2bj\Domain\Entity\Paket;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class SkpdTelahMengirimPaket
 * @package Jowy\P2bj\Domain\Event
 */
class SkpdTelahMengirimPaket extends Event
{
    /**
     * @var Paket
     */
    private $paket;

    /**
     * @param Paket $paket
     */
    public function __construct(Paket $paket)
    {
        $this->paket = $paket;
    }
}
