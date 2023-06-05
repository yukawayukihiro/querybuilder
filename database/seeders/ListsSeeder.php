<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '山田太郎',
            'age' => 50,
            'mail' => 'taro@yamada.com',
        ];
        DB::table('lists')->insert($param);

        $param = [
            'name' => '佐藤花子',
            'age' => 40,
            'mail' => 'hanako@flower.com',
        ];
        DB::table('lists')->insert($param);
    }
}
