<?php

namespace App\Business;

use App\Models\Student as StudentModel;
use Carbon\Carbon;

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

    /**
     * Search a Student by params.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function search(array $params)
    {
        try {
            $query = StudentModel::query();

            if ($params['name']) {
                $query->where('name', 'like', '%' . $params['name'] . '%');
            }

            if ($params['name']) {
                $query->where('email', 'like', '%' . $params['email'] . '%');
            }

            return $query->get();
        } catch (\Exception $e) {
            throw $e;
        }
    }


    /**
     * Report of Students.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function report()
    {
        try {
            $now = Carbon::now();

            $ageGroup = [
                'minor_15' => [$now->subYears(15)->toDateString(), $now->toDateString()],
                'between_15_18' => [$now->subYears(18)->toDateString(), $now->subYears(15)->toDateString()],
                'between_19_24' => [$now->subYears(24)->toDateString(), $now->subYears(19)->toDateString()],
                'between_25_30' => [$now->subYears(30)->toDateString(), $now->subYears(25)->toDateString()],
                'major_30' => [$now->subYears(100)->toDateString(), $now->subYears(30)->toDateString()],
            ];

            $report = [];

            foreach ($ageGroup as $group => [$initial, $end]) {
                $report[$group] = StudentModel::selectRaw('gender, COUNT(*) as total')
                    ->whereBetween('birth_date', [$end, $initial])
                    ->groupBy('gender')
                    ->get()
                    ->keyBy('gender')
                    ->map(function ($item) {
                        return $item->total;
                    });
            }

            return $report;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}