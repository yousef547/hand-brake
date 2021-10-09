<?php

namespace Database\Seeders;

use App\Models\cmodel;
use App\Models\product;
use App\Models\year;
use Illuminate\Database\Seeder;

class cmodelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cmodel::factory()->count(20)->create();
        year::factory()->has(
            product::factory()->count(5)
        )->count(60)->create();
    }
}
