@extends('template.app')
@section('content')
  <!-- Container -->
  <div class="container">
    <!-- card todo_add -->
    <div class="card" id="todo_add">
      <!-- card header -->
      <div class="card-header">
        Todo Add
      </div>
      <!-- card body -->
      <div class="card-body">
        <!-- <h5 class="card-title">Special title treatment</h5> -->
        <!-- form -->
        <form class="todo_frm">
          @csrf
         <!-- hidden type id of todo-->
          <input type="hidden" class="form-control" id="id" name="id" required> 
           <!-- hidden type status of todo-->
           <input type="hidden" class="form-control" id="status" name="status" value = 0 required> 
          <!-- form-group input id=title -->
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <!-- form-group textarea id=description -->
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="description" required></textarea>
          </div>
          
          <button type="button" class="btn btn-primary" onclick="Todo.add_data()" id="add_btn">Submit</button>
          <button type="button" class="btn btn-info" onclick="Todo.update_specific_data()" style="display:none" id="update_btn">Update</button>
        </form>
        <!-- end form -->
      </div>
    </div>
    <!-- end card todo_add -->

    <!-- card todo_list -->
    <div class="card">
     <!-- div card-header todo_list -->
      <div class="card-header">
        Todo List
      </div>
      <!-- end div card-header todo_list -->
      
      <!-- div card-body todo_list -->
      <div class="card-body">
        <!-- table id=todo_list_tbl -->
        <table class="table table-bordered" id="todo_list_tbl">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>*</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="todo_list_tbody"></tbody>
        </table>
         <!-- table id=todo_list_tbl -->
      </div>
      <!-- end div card-body todo_list -->
    </div>
     <!-- end card todo_list -->
  </div>
  <!-- End Container -->
@endsection

@section('resource')
    <!-- Base url use in ajax request -->
    <script>
    const BASE_URL = "{{URL::to('/')}}";
    </script>
   <!-- Assets Footer-->  
    <!-- todo-js -->
    <script src="{{ asset('scripts/todo_list.js')}}"></script>
@endsection