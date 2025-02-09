<?php

namespace App\Http\Controllers;

use App\Business\CourseBusiness;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    /**
     * @var CourseBusiness $courseBusiness
     */
    private $courseBusiness;

    /**
     * CourseController constructor.
     *
     * @param CourseBusiness $courseBusiness
     */
    public function __construct(CourseBusiness $courseBusiness)
    {
        $this->courseBusiness = $courseBusiness;
    }

    public function index()
    {
        return response()->json(Course::all());
    }

    public function show(Course $course)
    {
        return response()->json($course);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $course = $this->courseBusiness->create($data);

        return response()->json($course, Response::HTTP_CREATED);
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $this->courseBusiness->update($course, $data);

        return response()->json($course);
    }

    public function destroy(Course $course)
    {
        $id = $course->value('id');

        $this->courseBusiness->delete($course);

        return response('Course ' . $id . ' deleted!', );
    }
}
