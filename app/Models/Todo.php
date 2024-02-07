<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // use HasFactory;

    protected $table = "todos";
    protected $primaryKey = "id";
    protected $keyType = "string";
    protected $fillable = [
        "id",
        "todo"
    ];

    public $timestamps = true;
}
