<?php

namespace Database\Seeders;

use App\Models\Visiteur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VisiteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visiteur::factory()->count(4)->create();
    }
}