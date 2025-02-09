<?php

namespace App\Business;

use App\Models\Course as CourseModel;

/**
 * Class CourseBusiness
 *
 * @package App\Business
 */
class CourseBusiness extends Business
{

    /**
     * @var CourseModel
     */
    private $courseModel;

    /**
     * CourseBusiness constructor.
     *
     * @param CourseModel $courseModel
     */
    public function __construct(CourseModel $courseModel)
    {
        $this->courseModel = $courseModel;
    }

    /**
     * Create a Course by params.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function create(array $params)
    {
        try {
            return CourseModel::create($params);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Update a Course by params.
     *
     * @param $course
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function update(CourseModel $course, array $params)
    {
        try {
            return $course->update($params);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Delete a Course by params.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function delete(CourseModel $course)
    {
        try {
            return $course->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}