<?php

namespace App\Service;

use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Uid\UuidV6;

class GeneratePdf implements GeneratePdfInterface
{

    public function __construct(
        private readonly Pdf $knpSnappyPdf
    ) {
    }

    public function generatePdf(): File
    {
        $html = '<html><body><p>This document was generated automatically. Customer Interaction should be implemented</p></body></html>';
        $pathfilePdf = sprintf('%s/%s.pdf', sys_get_temp_dir(), UuidV6::generate());

        $this->knpSnappyPdf->generateFromHtml($html, $pathfilePdf);

        return new File($pathfilePdf);
    }
}
