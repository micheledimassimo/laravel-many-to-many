<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::withoutForeignKeyConstraints(function () {
            Technology::truncate();
        });

        
        for ($i = 0; $i < 5; $i++) {

           
            
            $technology = new Technology();

            $technology->name = fake()->word();
            $technology->industry = fake()->company();
            $technology->save();
        }
    }
}
