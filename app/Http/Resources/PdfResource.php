<?php

namespace App\Http\Resources;

use App\Enums\PdfStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PdfResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return match ($this->status) {
            PdfStatus::FAILED => ['id' => $this->id , 'status'=>$this->status,'error' => $this->error_message],
            PdfStatus::SUCCESS => ['id' => $this->id, 'status' => $this->status , 'url' => $this->url],
            default => ['id' => $this->id, "status" => $this->status]
        };
    }
}
