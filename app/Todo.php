<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'description'];


    public function get_all_data()
    {
        return Todo::whereNotNull('deleted_at')
                        ->get();
        /*only with deleted_at value null will show */
    }
    public function insert_data($data)
    {
        return Todo::create($data)->save();
        /* insert data todo*/
    }
}
