<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorie = [
            ['name'=>'Parties'],
            ['name'=>'1337'],
            ['name'=>'ShowCase'],
            ['name'=>'Youcode'],
        ];
        Categorie::insert($categorie);
    }
}