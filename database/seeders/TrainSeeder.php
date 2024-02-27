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
       

            $train = new Train();
            $train->company = fake()->company();
            $train->departure_station = fake()->city();
            $train->arrival_station = fake()->city();
            $train->departure_date = '2024-02-27';
            $train->arrival_date = fake()->date();
            $train->number_of_carriages = fake()->numberBetween(5, 20);
            $train->in_time = true;
            $train->deleted = false;
            $train->save();
            
        
}}
