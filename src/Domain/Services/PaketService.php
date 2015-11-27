<?php

namespace Jowy\P2bj\Domain\Services;

use Jowy\P2bj\Domain\Entity\Paket;

class PaketService
{
    /**
     * @param Paket $paket
     */
    public static function tolak(Paket $paket)
    {
        $status = $paket->getStatus();

        switch ($status) {
            case 'pelayanan':
                $paket->setStatus('skpd');
                break;
            case 'distribusi':
                $paket->setStatus('pelayanan');
                break;
            case 'kaupt':
                $paket->setStatus('distribusi');
                break;
            case 'pokja':
                $paket->setStatus('kaupt');
                break;
        }
    }

    public static function verifikasi(Paket $paket)
    {
        $status = $paket->getStatus();

        switch ($status) {
            case 'pelayanan':
                $paket->setStatus('distribusi');
                break;
            case 'distribusi':
                $paket->setStatus('kaupt');
                break;
            case 'kaupt':
                $paket->setStatus('pokja');
                break;
            case 'pokja':
                $paket->setStatus('ok');
                break;
        }
    }
}
