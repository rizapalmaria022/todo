<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'description'];

    public function insert_data($data)
    {
        return Todo::create($data)->save();
    }
}
