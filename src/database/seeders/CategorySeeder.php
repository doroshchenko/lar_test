<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['uuid' => Str::uuid()->toString(), 'name' => 'world'],
            ['uuid' => Str::uuid()->toString(), 'name' => 'business'],
            ['uuid' => Str::uuid()->toString(), 'name' => 'health'],
        ]);
    }
}