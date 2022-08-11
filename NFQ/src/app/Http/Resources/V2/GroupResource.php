<?php

namespace App\Http\Resources\V2;

use App\Http\Resources\V2;
use App\Models\Project;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array|\JsonSerializable|Arrayable
    {
        $project = Project::find($this->project_id);

        return [
            'id' => $this->id,
            'project' => new V2\ProjectResource($project)
        ];
    }
}
