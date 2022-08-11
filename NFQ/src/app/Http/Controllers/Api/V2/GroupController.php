<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\GroupCollection;
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return GroupCollection
     */
    public function index()
    {
        $groups = Group::with(['project_id'])->get();

        return new GroupCollection($groups);
    }



}
