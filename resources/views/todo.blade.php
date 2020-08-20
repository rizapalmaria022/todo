<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>

  <!-- Plugins Header -->
   <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>

<body>
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
          <!-- form-group input id=title -->
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title">
          </div>
          <!-- form-group textarea id=description -->
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description"></textarea>
          </div>
          
          <button type="submit" class="btn btn-default">Submit</button>
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
              <th></th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
         <!-- table id=todo_list_tbl -->
      </div>
      <!-- end div card-body todo_list -->
    </div>
     <!-- end card todo_list -->
  </div>
  <!-- End Container -->

  <!-- Plugins Footer-->
    <!-- Bootstrap -->
    <script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Jquery -->
    <script src="{{ asset('../node_modules/jquery/dist/jquery.min.js') }}"></script>


  <!-- Assets Footer-->  
    <!-- todo-js -->
    <script src="{{ asset('scripts/todo_list.js')}}"></script>

</body>
</html>