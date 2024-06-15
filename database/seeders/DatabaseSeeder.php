<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\LinkSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\MetaSeeder;
use Database\Seeders\ProjectSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MetaSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
