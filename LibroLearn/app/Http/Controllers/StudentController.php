<?php

namespace App\Http\Controllers;

use App\Business\StudentBusiness;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    /**
     * @var StudentBusiness $studentBusiness
     */
    private $studentBusiness;

    /**
     * StudentController constructor.
     *
     * @param StudentBusiness $studentBusiness
     */
    public function __construct(StudentBusiness $studentBusiness)
    {
        $this->studentBusiness = $studentBusiness;
    }

    public function index()
    {
        return response()->json(Student::all());
    }

    public function show(Student $student)
    {
        return response()->json($student);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:students,email',
            'gender' => 'nullable|string|in:male,female,other',
            'birth_date' => 'required|date',
        ]);

        $student = $this->studentBusiness->create($data);

        return response()->json($student, Response::HTTP_CREATED);
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:students,email,' . $student->id,
            'gender' => 'nullable|string|in:male,female,other',
            'birth_date' => 'required|date',
        ]);

        $this->studentBusiness->update($student, $data);

        return response()->json($student);
    }

    public function destroy(Student $student)
    {
        $id = $student->value('id');

        $this->studentBusiness->delete($student);

        return response('Student ' . $id . ' deleted!', );
    }
}
