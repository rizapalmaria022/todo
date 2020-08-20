<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description'];
    // protected $softDelete = true;

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

    public function delete_data($id)
    {
        // return Todo::withTrashed()->where('id', 1)
        //                     ->get();
        return  Todo::find($id)->delete();
    }
}
