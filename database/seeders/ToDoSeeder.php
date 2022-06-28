<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("todo")->insert([
            [
                "id" => 1,
                "name" => "دانشگاه رفتن",
            ]
        ]);

        DB::table("todo")->insert([
            [
                "id" => 2,
                "name" => "ورزش کردن",
            ]
        ]);

        DB::table("todo")->insert([
            [
                "id" => 3,
                "name" => "تمرین برنامه نویسی",
            ]
        ]);
    }
}
