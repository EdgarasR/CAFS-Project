<?php

namespace App\Http\Resources\Cars;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            'id' => $this->id,
            'model' => $this->model,
            'engine' => $this->engine,
            'fuel' => $this->fuel,
            'gearbox' => $this->gearbox,
            'power' => $this->power,
            'color' =>  $this->color,
            'price' => $this->price,
        ];
    }

    public function __toString()
    {
        return $this->toJson();
    }
}
