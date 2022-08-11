<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResourceCollection;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $query = Student::OrderBy('id');

        $students = $query->get();

        return response()->json(compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(StudentRequest $request)
    {
        $validated = $request->validated();

        $check = Student::create($validated);

        return response()->json(compact('check'));
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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function modify(Request $request)
    {
        $info = $request->all();

        $check = Student::where('id', $request->student_id)
            ->update([
                'group_id' => $request->group_id,
                'project_id' => $request->project_id
            ]);

        return response()->json(compact('info', 'check'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $student = Student::where('id', $id);

        $check = $student->delete();

        if ($check) {
            $response = ['positive' => 'Student information was successfully deleted'];
        } else {
            $response = ['negative' => 'Error, student information was not deleted'];
        }

        return response()->json(compact('response'));
    }
}
