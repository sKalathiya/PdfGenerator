<?php

namespace App\Models;

use App\Enums\PdfStatus;
use MongoDB\Laravel\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = ["status" , "url" , "user_id"];
}
