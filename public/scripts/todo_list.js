$(document).ready(function () {
  Todo.load_all();
});

const Todo = (()=>{
  var todo = {};

  // load all the for todo list
  // load table id=todo_list_tbl
  todo.load_all = () => 
  {
    var table = '';
    $.ajax({
      type: "get",
      url: BASE_URL+'/load',
      dataType: "json",
      success: function (response) 
      {
        console.log(response);
        $.each(response, function (index) 
        {
          table +=`
           <tr>
            <td>${index + 1}</td>
            <td>${this.title}</td>
            <td>${this.description}</td>
            <td>
            <input type="checkbox" id="check_todo" onclick="Todo.update_status(${this.id})"></td>
            <td>
            <button type="button" class="btn btn-primary" onclick="Todo.show_specific_data(${this.id})">Update</button>
            <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr> `;
        });

        $("#todo_list_tbody").html(table);
      }
    });
  }

  //function for additional todo
  todo.add_data = () => 
  {
    var data = {};
      // get data by name in form class=todo_frm
      $.each($('.todo_frm').serializeArray(), function() {
        data[this.name] = this.value;
      });

    $.ajax({
      type: "post",
      url: BASE_URL+'/add',
      data: data,
      dataType: "json",
      success: function (response) 
      {
         if(response == true)
         {
            alert("successfully");
            Todo.load_all();
         }else
         {
           alert("unsuccessful");
         }
      }
    });
  }

  todo.show_specific_data = (id) =>
  {
  
    $.ajax({
      type: "get",
      url: BASE_URL+'/show/'+id,
      dataType: "json",
      success: function (response) 
      {
          // load data per input
          // id,title and description
          $("#id").val(response['id']); 
          $("#title").val(response['title']);
          $("#description").text(response['description']);

          //btn hide function for submit btn
          $("#add_btn").hide();
          $("#update_btn").show();
      }
    });
  }

  todo.update_specific_data = () =>
  {
      id = $("#id").val();

      var data = {};
      // get data by name in form class=todo_frm
      $.each($('.todo_frm').serializeArray(), function() {
        data[this.name] = this.value;
        
      });
      
      $.ajax({
        type: "patch",
        url: BASE_URL+'/update/'+id,
        data:data,
        dataType: "json",
        success: function (response) 
        {
            if(response > 0)
            {
              alert('successfully updated');
              Todo.load_all(); // if success reload data
            }else
            {
              alert('unsuccessfully updated');
            }
        }
      });
  }

  todo.update_status = (id) =>
  {
    
      var data = {};
      $("#status").val(1);
      $.each($('.todo_frm').serializeArray(), function() {
        data[this.name] = this.value;
        
      });

      $.ajax({
        type: "patch",
        url: BASE_URL+'/update/'+id,
        data:data,
        dataType: "json",
        success: function (response) 
        {
            // if(response > 0)
            // {
            //   alert('successfully updated');
            //   Todo.load_all(); // if success reload data
            // }else
            // {
            //   alert('unsuccessfully updated');
            // }
        }
      });
  }
  return todo;
})();