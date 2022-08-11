<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectResourceCollection;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\Project;
use App\Models\Group;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $query = Project::OrderBy('id');

        $projects = $query->get();

        return response()->json(compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(ProjectRequest $request)
    {
        $validated = $request->validated();

        $check = Project::create($validated);

        $groups = (int)$validated['groups'];

        for (; $groups > 0; $groups--) {
           Group::create([
                'project_id' => $check->id
            ]);
        }

        if ($check) {
            $response = ['positive' => 'Project information was successfully created'];
        } else {
            $response = ['negative' => 'Error, project information was not created'];
        }

        return response()->json(compact('response'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request)
    {

        $project = Project::where('id', $request->id)->firstOrFail();

        $groups = Group::where('project_id', $request->id)->get();

        return response()->json(compact('project', 'groups'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $project = Project::where('id', $id);

        $check = $project->delete();

        if ($check) {
            $response = ['positive' => 'Project information was successfully deleted'];
        } else {
            $response = ['negative' => 'Error, project information was not deleted'];
        }

        return response()->json(compact('response'));
    }
}
