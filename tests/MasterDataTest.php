<?php

namespace Manojkiran\MasterData\Tests;

use Manojkiran\MasterData\Models\MasterData;
use Manojkiran\MasterData\Enums\MasterDataStatus;

class MasterDataTest extends BaseTestCase
{
    /** @var array */
    private $defaultSingleData = [
        'main_constant_name' => 'BloodGroup',
        'sub_constant_name' => 'A+',
        'sub_constant_value' => '1',
        'sub_constant_sequence' => 1,
    ];

    /** @var \Manojkiran\MasterData\Models\MasterData */
    private $masterData;

    public function setUp(): void
    {
        parent::setUp();

        $this->masterData = MasterData::create($this->defaultSingleData);
    }

    /** @test */
    public function theDefaultTimeStampIsNullForUpdatedOnCreating()
    {
        $this->assertEquals(null, $this->masterData->updated_at);
    }

    /** @test */
    public function theDefaultStatusIsActive()
    {
        $this->assertEquals(MasterDataStatus::ACTIVE, $this->masterData->constant_status);
    }

    /** @test */
    public function theStatusCanBeUpdatedToInactive()
    {
        $this->masterData->markAsInActive();
        $this->assertEquals(MasterDataStatus::INACTIVE, $this->masterData->constant_status);
    }

    /** @test */
    public function theStatusCanBeUpdatedToActive()
    {
        $this->masterData->markAsActive();
        $this->assertEquals(MasterDataStatus::ACTIVE, $this->masterData->constant_status);
    }

    /** @test */
    public function theRecordCanBeSoftDeleted()
    {
        $this->masterData->delete();

        $this->assertSoftDeleted($this->masterData->getTable(), [
            'main_constant_name' => 'BloodGroup',
            'sub_constant_name' => 'A+',
            'sub_constant_value' => '1',
            'sub_constant_sequence' => 1,
        ]);
    }

    /** @test */
    public function theSoftDeletedRecordCanBeRestored()
    {
        $this->masterData = MasterData::withTrashed()->first();

        $this->assertSame(1, $this->masterData->id);
    }

    /** @test */
    public function theModelCanBeUpdated()
    {
        $data = [
            'main_constant_name' => 'BloodGroup',
            'sub_constant_name' => 'A+',
            'sub_constant_value' => '1',
            'sub_constant_sequence' => 1,
        ];

        $this->masterData->update($data);

        $this->assertSame($data['sub_constant_name'], $this->masterData->sub_constant_name);
    }
}
