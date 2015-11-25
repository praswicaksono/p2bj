<?php

namespace spec\Jowy\P2bj\Domain\Entity;

use Jowy\P2bj\Domain\Entity\Paket;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DokumenSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jowy\P2bj\Domain\Entity\Dokumen');
    }

    public function it_can_create_new_document($description, \SplFileInfo $file, Paket $paket)
    {
        $this->beConstructedCreate($description, $file, $paket);
    }
}
