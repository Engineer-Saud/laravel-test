<?php

namespace App\Services;

use App\Models\Workshop;
use Throwable;


/**
 * Class WorkshopService
 *
 * @package App\Services
 * @author    Engineer Saud <engr.saud94@gmail.com>
 * @copyright 2022 All rights reserved.
 * @since     Oct 05, 2022
 * @project   laravel-test
 */
class WorkshopService
{
    public function getFirstRecord()
    {
        try {
            return Workshop::first();
        } catch (Throwable $exception) {
            report($exception);
        }

        return collect([]);
    }//end getFirstRecord()
}//end class
