<?php

namespace Manojkiran\MasterData\Traits;

use Illuminate\Database\Eloquent\Model;

trait TimeStamps
{
    /**
     * The "TimeStamp" method of the model.
     *
     * @return void
     */
    public static function bootTimeStamps()
    {
        static::creating(function (Model $model) {
            $createdAtColumn = $model::CREATED_AT;
            $model->$createdAtColumn = now();
            $model->constant_status = 'ACTIVE';
        });

        static::updating(function (Model $model) {
            $updatedAtColumn = $model::UPDATED_AT;
            $model->$updatedAtColumn = now();
        });
    }
}
