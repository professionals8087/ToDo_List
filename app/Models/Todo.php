<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todo';

    public static function getAll() {
        return self::query()->get()->all();
    }

    public static function getID($id) {
        return self::query()->where('id', $id)->first();
    }

}
