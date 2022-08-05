<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HausResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'bathrooms'=>$this->bathrooms,
            'badrooms'=>$this->badrooms,
            'Storeys'=>$this->Storeys,
            'Garage'=>$this->Garage,
            'Prise'=>$this->Prise
            
        ];
    }
}
