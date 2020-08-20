<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;




class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Todo $todo)
    {
        /**
         * load all data with null deleted_data
         * data
         *  */ 
        $result = $todo->get_all_data(); 
        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Todo $todo)
    {
         /**
          * validate the request
          * title :  required
          * description : required
         **/
        $validatedData = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);
        
        // validation check 
        if ($validatedData->fails()) 
        {
            $result = $validatedData->errors();// error message validation
        }else
        {
            $result =  $todo->insert_data($request->all()); // query insert data
        }

        return response()->json($result); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show($id, Todo $todo)
    {
        $data = $todo->select_specific_data($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Todo $todo)
    {
        
        if($request->status == 0)
        {
            $validatedData = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
            ]);
            // validation check 
            if ($validatedData->fails()) 
            {
                $result = $validatedData->errors();// error message validation
            }else
            {
                
                $result =  $todo->update_data($id, $request->except(['_token'])); // query insert data
        
            }
        }else{
        
            $result =  $todo->update_data($id, ['status' => $request->status]); // query insert data
        }
       
        
        

        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Todo $todo)
    {
        $result =  $todo->delete_data($id); // query delete data
        return response()->json($result);
    }

    
    
}
