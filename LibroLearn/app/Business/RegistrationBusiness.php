<?php

namespace App\Business;

use App\Models\Registration as RegistrationModel;

/**
 * Class RegistrationBusiness
 *
 * @package App\Business
 */
class RegistrationBusiness extends Business
{

    /**
     * @var RegistrationModel
     */
    private $registrationModel;

    /**
     * RegistrationBusiness constructor.
     *
     * @param RegistrationModel $registrationModel
     */
    public function __construct(RegistrationModel $registrationModel)
    {
        $this->registrationModel = $registrationModel;
    }

    /**
     * Create a Registration by params.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function create(array $params)
    {
        try {
            return RegistrationModel::create($params);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Update a Registration by params.
     *
     * @param $registration
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function update(RegistrationModel $registration, array $params)
    {
        try {
            return $registration->update($params);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Delete a Registration by params.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     */
    public function delete(RegistrationModel $registration)
    {
        try {
            return $registration->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }
}