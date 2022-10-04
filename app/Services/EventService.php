<?php

namespace App\Services;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Throwable;

/**
 * Class EventService
 *
 * @package App\Services
 * @author    Engineer Saud <engr.saud94@gmail.com>
 * @copyright 2022 All rights reserved.
 * @since     Oct 05, 2022
 * @project   laravel-test
 */
class EventService
{


    /**
     * Function findAll
     *
     * @param array $with
     *
     * @return Event[]|Builder[]|Collection|\Illuminate\Support\Collection
     */
    public function findAll(array $with = [])
    {
        try {
            if (!empty($with)) {
                return Event::with($with)->get();
            } else {
                return Event::all();
            }
        } catch (Throwable $exception) {
            report($exception);
        }

        return collect([]);
    }//end findAll()
}//end class