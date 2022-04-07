<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2022-04-07 17:54:54',
                'updated_at' => '2022-04-07 17:54:54',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2022-04-07 17:54:54',
                'updated_at' => '2022-04-07 17:54:54',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2022-04-07 17:54:54',
                'updated_at' => '2022-04-07 17:54:54',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
