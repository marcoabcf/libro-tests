<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Student;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return Registration::with(['student', 'course'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $registration = Registration::create($request->all());
        return response()->json($registration, 201);
    }

    public function show($id)
    {
        return Registration::with(['student', 'course'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $registration = Registration::findOrFail($id);
        $registration->update($request->all());
        return response()->json($registration);
    }

    public function destroy($id)
    {
        Registration::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    public function registrationsByStudent(Student $student)
    {
        return Registration::where('course_id', $student)->with('course')->get();
    }
}
