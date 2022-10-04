<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Event
 *
 * @package App\Models
 * @author    Engineer Saud <engr.saud94@gmail.com>
 * @copyright 2022 All rights reserved.
 * @since     Oct 05, 2022
 * @project   laravel-test
 */
class Event extends Model
{


    /**
     * Function workshops
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }//end workshops()
}//end class
