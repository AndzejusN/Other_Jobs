<?php

namespace App\Http\Resources;

use JsonSerializable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'kcal' => $this->kcal,
            'carb' => $this->carb,
            'protein' => $this->protein,
            'fat' => $this->fat,
            'group'=> $this->group
        ];
    }
}
