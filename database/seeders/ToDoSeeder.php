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
                "name" => "دانشگاه رفتن",
            ]
        ]);

        DB::table("todo")->insert([
            [
                "name" => "ورزش کردن",
            ]
        ]);

        DB::table("todo")->insert([
            [
                "name" => "تمرین برنامه نویسی",
            ]
        ]);
    }
}
