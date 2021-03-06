<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            // "attribute_id" => $this->option->attribute->id,
            // "attribute" => $this->option->attribute->name,
            "option_id" => $this->id,
            "option" => $this->value,
        ];
    }
}