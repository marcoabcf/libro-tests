<?php

namespace App\Business;

use App\Models\Student as StudentModel;

/**
 * Class StudentBusiness
 *
 * @package App\Business
 */
class StudentBusiness extends Business
{

    /**
     * @var StudentModel
     */
    private $studentModel;

    /**
     * StudentBusiness constructor.
     *
     * @param StudentModel $studentModel
     */
    public function __construct(StudentModel $studentModel)
    {
        $this->studentModel = $studentModel;
    }

    /**
     * Create a Student by params.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function create(array $params)
    {
        try {
            return StudentModel::create($params);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Update a Student by params.
     *
     * @param $student
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function update(StudentModel $student, array $params)
    {
        try {
            return $student->update($params);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Delete a Student by params.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function delete(StudentModel $student)
    {
        try {
            return $student->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}