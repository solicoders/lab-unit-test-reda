<?php

namespace Database\Seeders\tests;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tests;
use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tests::create([
            'nom' => "Inscription à Solicode",
            'description' => "L'inscription à Solicode est la première étape pour rejoindre le centre Solicode"
        ]);
    }
}
