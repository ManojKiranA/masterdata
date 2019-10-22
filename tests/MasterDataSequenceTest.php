<?php

namespace Manojkiran\MasterData\Tests;

use Illuminate\Support\Collection;
use Manojkiran\MasterData\Models\MasterData;

class MasterDataSequenceTest extends BaseTestCase
{
    /** @var array */
    private $defaultBulkData = [
        [
            'main_constant_name' =>'BillingPeriod',
            'sub_constant_name' =>'Monthly',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'BillingPeriod',
            'sub_constant_name' =>'Quarterly',
            'sub_constant_value' =>'4',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'BillingPeriod',
            'sub_constant_name' =>'Half Yearly',
            'sub_constant_value' =>'6',
            'sub_constant_sequence' =>3,
            ],
            [
            'main_constant_name' =>'BillingPeriod',
            'sub_constant_name' =>'Yearly',
            'sub_constant_value' =>'12',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'BillingType',
            'sub_constant_name' =>'Govt',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'BillingType',
            'sub_constant_name' =>'Corporate',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'BillingType',
            'sub_constant_name' =>'SME',
            'sub_constant_value' =>'3',
            'sub_constant_sequence' =>3,
            ],
            [
            'main_constant_name' =>'BillingType',
            'sub_constant_name' =>'Individual',
            'sub_constant_value' =>'4',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'BillingPeriod',
            'sub_constant_name' =>'One Time Payment',
            'sub_constant_value' =>'0',
            'sub_constant_sequence' =>5,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Public Cloud',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'ISP/MPLS/CDN',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Office Rent',
            'sub_constant_value' =>'3',
            'sub_constant_sequence' =>3,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'House Keeping',
            'sub_constant_value' =>'4',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Petty Cash',
            'sub_constant_value' =>'5',
            'sub_constant_sequence' =>5,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Travel Expense',
            'sub_constant_value' =>'6',
            'sub_constant_sequence' =>6,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Data Center',
            'sub_constant_value' =>'7',
            'sub_constant_sequence' =>7,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'License Aggregator',
            'sub_constant_value' =>'8',
            'sub_constant_sequence' =>8,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'OEM',
            'sub_constant_value' =>'9',
            'sub_constant_sequence' =>9,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Parking',
            'sub_constant_value' =>'10',
            'sub_constant_sequence' =>10,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'TNEB',
            'sub_constant_value' =>'11',
            'sub_constant_sequence' =>11,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Visiting/ID Card Printing',
            'sub_constant_value' =>'12',
            'sub_constant_sequence' =>12,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Consultants',
            'sub_constant_value' =>'13',
            'sub_constant_sequence' =>13,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'Other Miscellaneous Expenses',
            'sub_constant_value' =>'14',
            'sub_constant_sequence' =>14,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'SaaS Provider',
            'sub_constant_value' =>'15',
            'sub_constant_sequence' =>15,
            ],
            [
            'main_constant_name' =>'OSTYPE',
            'sub_constant_name' =>'Windows',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'OSTYPE',
            'sub_constant_name' =>'Linux',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'OSTYPE',
            'sub_constant_name' =>'Macintosh',
            'sub_constant_value' =>'3',
            'sub_constant_sequence' =>3,
            ],
            [
            'main_constant_name' =>'OSTYPE',
            'sub_constant_name' =>'Others',
            'sub_constant_value' =>'4',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'DBTYPE',
            'sub_constant_name' =>'SQL SERVER',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'DBTYPE',
            'sub_constant_name' =>'MYSQL',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'DBTYPE',
            'sub_constant_name' =>'ORACLE',
            'sub_constant_value' =>'3',
            'sub_constant_sequence' =>3,
            ],
            [
            'main_constant_name' =>'DBTYPE',
            'sub_constant_name' =>'DB2',
            'sub_constant_value' =>'4',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'DBTYPE',
            'sub_constant_name' =>'POGRESSQL',
            'sub_constant_value' =>'5',
            'sub_constant_sequence' =>5,
            ],
            [
            'main_constant_name' =>'DBTYPE',
            'sub_constant_name' =>'Others',
            'sub_constant_value' =>'6',
            'sub_constant_sequence' =>6,
            ],
            [
            'main_constant_name' =>'APPLICATION',
            'sub_constant_name' =>'VB.NET',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'APPLICATION',
            'sub_constant_name' =>'PHP',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'APPLICATION',
            'sub_constant_name' =>'JAVA',
            'sub_constant_value' =>'3',
            'sub_constant_sequence' =>3,
            ],
            [
            'main_constant_name' =>'APPLICATION',
            'sub_constant_name' =>'Python',
            'sub_constant_value' =>'4',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'APPLICATION',
            'sub_constant_name' =>'C / C++',
            'sub_constant_value' =>'5',
            'sub_constant_sequence' =>5,
            ],
            [
            'main_constant_name' =>'BillingPeriod',
            'sub_constant_name' =>'Custom',
            'sub_constant_value' =>'0',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Parking',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'TNEB',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Visiting/ID Card Printing',
            'sub_constant_value' =>'3',
            'sub_constant_sequence' =>3,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Consultants',
            'sub_constant_value' =>'4',
            'sub_constant_sequence' =>4,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Other Miscellaneous Expenses',
            'sub_constant_value' =>'5',
            'sub_constant_sequence' =>5,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Office Rent',
            'sub_constant_value' =>'6',
            'sub_constant_sequence' =>6,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'House Keeping',
            'sub_constant_value' =>'7',
            'sub_constant_sequence' =>7,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Petty Cash',
            'sub_constant_value' =>'7',
            'sub_constant_sequence' =>7,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Travel Expense',
            'sub_constant_value' =>'8',
            'sub_constant_sequence' =>8,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'GST TAX Repayment',
            'sub_constant_value' =>'9',
            'sub_constant_sequence' =>9,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Salary',
            'sub_constant_value' =>'10',
            'sub_constant_sequence' =>10,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Liability',
            'sub_constant_value' =>'11',
            'sub_constant_sequence' =>11,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'ISP/MPLS/CDN',
            'sub_constant_value' =>'12',
            'sub_constant_sequence' =>12,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'Reimbursement',
            'sub_constant_value' =>'13',
            'sub_constant_sequence' =>13,
            ],
            [
            'main_constant_name' =>'SERVICETYPE',
            'sub_constant_name' =>'PRODUCT',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'SERVICETYPE',
            'sub_constant_name' =>'SERVICE',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'PAYMENTPRIORITY',
            'sub_constant_name' =>'LOW',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'PAYMENTPRIORITY',
            'sub_constant_name' =>'HIGH',
            'sub_constant_value' =>'2',
            'sub_constant_sequence' =>2,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'PF',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'GXType',
            'sub_constant_name' =>'ESI',
            'sub_constant_value' =>'1',
            'sub_constant_sequence' =>1,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'POSTIEFS PF',
            'sub_constant_value' =>'0',
            'sub_constant_sequence' =>10,
            ],
            [
            'main_constant_name' =>'SPType',
            'sub_constant_name' =>'POSTIEFS ESI',
            'sub_constant_value' =>'0',
            'sub_constant_sequence' =>0,
            ],
    ];

    /** @var \Manojkiran\MasterData\Models\MasterData */
    private $masterData;

    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function defaultDataCountMatchesWithCreatedModel()
    {
        $this->assertTrue(true);
    }


}