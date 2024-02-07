<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;


class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $todo = new Todo();
        $todo->id = "1";
        $todo->todo = "Marcell";
        $todo->save();

        $todo = new Todo();
        $todo->id = "2";
        $todo->todo = "Putra";
        $todo->save();
    }
}
