<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Иванов',
            'email' => 'info@datainlife.ru',
        ]);
        DB::table('users')->insert([
            'name' => 'Петров',
            'email' => 'job@datainlife.ru'
        ]);
    }
}
