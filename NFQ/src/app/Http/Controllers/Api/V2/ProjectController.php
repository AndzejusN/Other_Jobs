<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\ProjectCollection;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ProjectCollection
     */
    public function index()
    {
        $projects = Project::get();

        return new ProjectCollection($projects);
    }



}
