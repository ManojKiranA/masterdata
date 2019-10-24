<?php

/*
 * This file is part of the MasterData package.
 *
 * (c) Manojkiran Appathurai <manojkiran10031998@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manojkiran\MasterData;

use Illuminate\Support\ServiceProvider;

class MasterDataServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/masterdata.php' => config_path('masterdata.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../config/masterdata.php', 'masterdata');

        if (! class_exists('CreateMasterDataTable')):

            $timestamp = date('Y_m_d_His', time());

        $this->publishes([
                __DIR__.'/../database/migrations/create_master_data_table.php.stub' => database_path("/migrations/{$timestamp}_create_master_data_table.php"),
            ], 'migrations');

        endif;
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
