<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();
        for ($i=0; $i < 15; $i++) {
            $train = new Train();
            $train->company = fake()->company();
            $train->departure_station = fake()->city();
            $train->arrival_station = fake()->city();
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->number_of_carriages = fake()->numberBetween(5, 20);
            $train->in_time = true;
            $train->deleted = false;
            $train->save();
            
        }
    }
}
