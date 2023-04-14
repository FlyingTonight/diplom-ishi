<?php

namespace Database\Seeders;

use App\Models\HostingPlan;
use Illuminate\Database\Seeder;

class HostingPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HostingPlan::create([
            'name' => 'Basic',
            'storage_limit' => 1000,
            'bandwidth_limit' => 10000,
            'price' => 10.00,
        ]);

        HostingPlan::create([
            'name' => 'Premium',
            'storage_limit' => 5000,
            'bandwidth_limit' => 50000,
            'price' => 50.00,
        ]);
    }
}
