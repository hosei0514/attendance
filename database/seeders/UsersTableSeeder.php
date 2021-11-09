<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => '100',
            'name' => 'Kohei',
            'email' => 'test-100@yahoo.co.jp',
            'password' => Hash::make('test')
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '101',
            'name' => 'Ryo',
            'email' => 'test-101@yahoo.co.jp',
            'password' => Hash::make('test')
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '102',
            'name' => 'Satoshi',
            'email' => 'test-102@yahoo.co.jp',
            'password' => Hash::make('test')
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '103',
            'name' => 'Keisuke',
            'email' => 'test-103@yahoo.co.jp',
            'password' => Hash::make('test')
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '104',
            'name' => 'Naoki',
            'email' => 'test-104@yahoo.co.jp',
            'password' => Hash::make('test')
        ];
        DB::table('users')->insert($param);

        $param = [
            'id' => '105',
            'name' => 'Satoru',
            'email' => 'test-105@yahoo.co.jp',
            'password' => Hash::make('test')
        ];
        DB::table('users')->insert($param);
    }
}