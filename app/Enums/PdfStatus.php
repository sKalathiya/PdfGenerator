<?php

namespace App\Enums;

enum PdfStatus
{
    case PENDING;
    case GENERATING;
    case SUCCESS;

    case FAILED ;


}
