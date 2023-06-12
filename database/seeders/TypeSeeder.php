<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config("db.types");
        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type[0];
            $newType->color = $type[1];
            $newType->save();
        }
        //
    }
}
