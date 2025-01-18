<?php

namespace App\Models;

use App\Enums\PdfStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use MongoDB\Laravel\Eloquent\Model;

class Pdf extends Model
{
    protected $fillable = ["status" , "url" , "user_id"];


    /**
     * Interact with the Pdf status.
     */
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => PdfStatus::from($value),
            set: fn (PdfStatus $value) => $value->value,
        );
    }
}
