<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\StudentCollection;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return StudentCollection
     */
    public function index()
    {
        $students = Student::get();

        return new StudentCollection($students);
    }
}
