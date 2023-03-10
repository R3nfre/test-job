<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Группа1',
            'expire_hours' => 1,
        ]);
        DB::table('groups')->insert([
            'name' => 'Группа2',
            'expire_hours' => 2,
        ]);
    }
}
