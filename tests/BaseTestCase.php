<?php

namespace Manojkiran\MasterData\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Manojkiran\MasterData\MasterDataServiceProvider;

abstract class BaseTestCase extends Orchestra
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            MasterDataServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        include_once __DIR__.'/../database/migrations/create_master_data_table.php.stub';

        (new \CreateMasterDataTable())->up();
    }
}
