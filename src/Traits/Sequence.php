<?php

namespace Manojkiran\MasterData\Traits;

use Illuminate\Database\Eloquent\Model;

trait Sequence
{
    /**
     * The "TimeStamp" method of the model.
     *
     * @return void
     */
    public static function bootSequence()
	{
		static::creating(function (Model $model) {

            if (config('masterdata.enable_auto_sequence')):
                if (config('masterdata.enable_auto_sequence_only_if_not_set') && null === $model->sub_constant_sequence):
                    if ($model->main_constant_name):
                            $model->sub_constant_sequence = $model::query()
                                                                ->ofConstantType($model->main_constant_name)
                                                                ->count() + 1;
                    endif;
                else:
                    if ($model->main_constant_name):
                        $model->sub_constant_sequence = $model::query()
                                                            ->ofConstantType($model->main_constant_name)
                                                            ->count() + 1;
                    endif;
                endif;
            endif;
        });
	}
}
