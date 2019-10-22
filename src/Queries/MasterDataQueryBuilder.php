<?php

/*
 * This file is part of the MasterData package.
 *
 * (c) Manojkiran Appathurai <manojkiran10031998@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manojkiran\MasterData\Queries;

use Illuminate\Database\Eloquent\Builder;
use Manojkiran\MasterData\Enums\MasterDataStatus;

class MasterDataQueryBuilder extends Builder
{
    /**
     * Applies the Filter Based on Status
     * 
     * @param  string $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function filter($status)
    {
        $this->where('constant_status','=',$status);

        return $this;
    }

    /**
     * Get only the Record with Active Status
     * 
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function active()
    {
        $this->filter(MasterDataStatus::ACTIVE);

        return $this;
    }

    /**
     * Get only the Record with Inactive Status
     * 
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function inActive()
    {
        $this->filter(MasterDataStatus::INACTIVE);
        
        return $this;
    }

    /**
     * Get only the Record which has Specific Constant Type
     * 
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function ofConstantType($constantType)
    {
        $this->where('main_constant_name','=',$constantType);
        
        return $this;
    }

    /**
     * Get only the Record which has Specific Constant Type
     * 
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function ofConstantTypes(array $constantType)
    {
        $this->whereIn('main_constant_name',$constantType);
        
        return $this;
    }
}
