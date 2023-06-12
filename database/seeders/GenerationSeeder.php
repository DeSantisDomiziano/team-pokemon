<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generations = config("db.generations");
        foreach ($generations as $generation) {
            $newGeneration = new Generation();
            $newGeneration->name = $generation;
            $newGeneration->save();
        }
    }
}
