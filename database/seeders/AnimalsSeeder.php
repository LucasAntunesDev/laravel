<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalsSeeder extends Seeder
{
    public function run(): void {
        DB::table('animals')->insert(([
            [
                'name' => 'Abacaxi',
                'age' => 8,
            ],
            [
                'name' => 'Batata',
                'age' => 3,
            ]
        ]));
    }
}