<?php

namespace App\Enums;

enum PdfStatus
{
    case GENERATING;
    case COMPLETED;

    case FAILED ;

    case CANCELLED ;

}
