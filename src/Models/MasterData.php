<?php

/*
 * This file is part of the MasterData package.
 *
 * (c) Manojkiran Appathurai <manojkiran10031998@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manojkiran\MasterData\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Manojkiran\MasterData\Enums\MasterDataStatus;
use Manojkiran\MasterData\Queries\MasterDataQueryBuilder;
use Manojkiran\MasterData\Traits\Sequence;
use Manojkiran\MasterData\Traits\TimeStamps;

class MasterData extends Model
{
    use SoftDeletes;

    use TimeStamps;

    use Sequence;

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        
        $this->setTable(config('masterdata.table_name'));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['main_constant_name','sub_constant_name','sub_constant_value','sub_constant_sequence','constant_status'];

    /**
     * Begin querying the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function query()
    {
        return parent::query();
    }

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder($query)
    {
        return new MasterDataQueryBuilder($query);
    }

    /**
     * Switch the Status of Models
     *
     *
     * @param string  $status
     * @return $this
     **/
    public function switchStatus($status)
    {
        return tap($this)->update(['constant_status' => $status]);
    }

    /**
     * Marks the Model as Active
     *
     *
     * @return $this
     **/
    public function markAsActive()
    {
        return $this->switchStatus(MasterDataStatus::ACTIVE);
    }

    /**
     * Marks the Model as Inactive
     *
     *
     * @return $this
     **/
    public function markAsInActive()
    {
        return $this->switchStatus(MasterDataStatus::INACTIVE);
    }

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'sub_constant_sequence' => 'integer',
     ];
}
