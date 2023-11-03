<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\File;

interface GeneratePdfInterface
{
    public function generatePdf(): File;
}
