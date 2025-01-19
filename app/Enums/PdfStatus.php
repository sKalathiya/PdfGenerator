<?php

namespace App\Enums;
use Illuminate\Contracts\Support\Arrayable;


enum PdfStatus : string
{
    case PENDING = "pending";
    case GENERATING = "generating";
    case SUCCESS = "success";
    case FAILED = "failed";


}
