<?php

namespace Database\Seeders;

use App\Models\car;
use App\Models\cmodel;
use App\Models\product;
use App\Models\year;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        car::factory()->count(5)->create();
    }
}