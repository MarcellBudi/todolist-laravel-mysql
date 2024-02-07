<?php

namespace App\Services\Impl;

use App\Services\TodolistService;
use App\Models\Todo;
use Illuminate\Support\Facades\Session;

class TodolistServiceImpl implements TodolistService
{
    public function saveTodo(string $id, string $todo): void
    {
        $todo = new Todo([
            "id" => $id,
            "todo" => $todo
        ]);
        $todo->save();
    }

    public function getTodolist(): array
    {
        // return Session::get("todolist", []);
        return Todo::query()->get()->toArray();
    }

    public function removeTodo(string $todoId)
    {
        // $todolist = Session::get("todolist");

        // foreach ($todolist as $index => $value) {
        //     if ($value['id'] == $todoId) {
        //         unset($todolist[$index]);
        //         break;
        //     }
        // }

        // Session::put("todolist", $todolist);
        $todo = Todo::query()->find($todoId);
        if($todo != null){
            $todo->delete();
        }
    }


}
