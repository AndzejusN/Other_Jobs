<?php

namespace App\Http\Resources\V2;

use App\Http\Resources\V2;
use App\Models\Group;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        $group = Group::find($this->group_id);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'group' => new V2\GroupResource($group),
        ];
    }
}
