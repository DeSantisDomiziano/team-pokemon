<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Utilities\Helpers;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemonList = Helpers::getCsvData(__DIR__ . "/pokemon.csv");
        foreach($pokemonList as $singlePokemon => $row) {
            if($singlePokemon != 0) {
                $pokemon = new Pokemon();
                $pokemon->name = $row[1];
                $pokemon->type_1 = $row[2];
                $pokemon->type_2 = $row[3];
                $pokemon->total = $row[4];
                $pokemon->hp = $row[5];
                $pokemon->attack = $row[6];
                $pokemon->defense = $row[7];
                $pokemon->sp_atk = $row[8];
                $pokemon->sp_def = $row[9];
                $pokemon->speed = $row[10];
                $pokemon->generation = $row[11];
                if ($row[12] === 1) {
                    $pokemon->legendary = true;
                } elseif ($row[12] === 0) {
                    $pokemon->legendary = false;
                }
                $pokemon->save();
            }
        }
    }
}
