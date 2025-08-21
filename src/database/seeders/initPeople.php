<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class initPeople extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
            ['name' => 'Taro', 'mail' => 'taro@yamada', 'age' => 20],
            ['name' => 'hanako', 'mail' => 'hanako@flower', 'age' => 28],
            ['name' => 'sachiko', 'mail' => 'sachiko@happy', 'age' => 47],
        ]);
    }
}
