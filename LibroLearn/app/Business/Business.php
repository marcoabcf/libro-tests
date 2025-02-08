<?php

namespace App\Business;

use Illuminate\Support\Facades\DB;

/**
 * Class Business base that manages all business.
 *
 * @package App\Business
 */
class Business
{

    /**
     * Initialize an new transaction.
     */
    protected function beginTransaction()
    {
        DB::beginTransaction();
    }

    /**
     * Finish transaction with success.
     */
    protected function commit()
    {
        DB::commit();
    }

    /**
     * Undo transaction.
     */
    protected function rollBack()
    {
        DB::rollBack();
    }
}