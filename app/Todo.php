<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'description'];


    public function get_all_data()
    {
        return Todo::whereNull('deleted_at')
                        ->get();
                        // return Todo::get();
        /*only with deleted_at value null will show */
    }
    public function insert_data($data)
    {
        return Todo::create($data)->save();
        /* insert data todo*/
    }

    public function select_specific_data($id)
    {
        return Todo::where('id', $id)
                        ->first();
        /*only with deleted_at value null will show */
    }

    public function update_data($id, $data)
    {
        return Todo::where('id', $id)
                    ->update($data);
    }
}
