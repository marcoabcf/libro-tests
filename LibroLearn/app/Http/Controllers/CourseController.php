<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    public function index()
    {
        return response()->json(Course::all(), Response::HTTP_OK);
    }

    public function show(Course $course)
    {
        return response()->json($course, Response::HTTP_OK);
    }
}
