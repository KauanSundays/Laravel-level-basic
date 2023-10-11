<?php

namespace Database\Seeders;use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProdutosAleatoriosSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('produtos')->insert([
                'nome' => $faker->word, // Nome aleatório
                'preco' => $faker->randomFloat(2, 1, 100), // Preço aleatório
            ]);
        }
    }
}
