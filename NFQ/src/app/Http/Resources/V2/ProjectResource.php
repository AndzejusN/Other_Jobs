<?php

namespace App\Http\Resources\V2;

use App\Models\Group;
use App\Http\Resources\V2;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{

    /**
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public $preserveKeys = true;

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
            'name' => $this->name,
            'groups' => $this->groups,
            'students' => $this->students,
        ];
    }
}
