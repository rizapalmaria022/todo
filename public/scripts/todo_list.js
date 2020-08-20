$(document).ready(function () {
  Todo.load_all();
});

const Todo = (()=>{
  var todo = {};

  todo.load_all = () => 
  {
    $.ajax({
      type: "get",
      url: BASE_URL+'/load',
      dataType: "dataType",
      success: function (response) 
      {
        
      }
    });
  }
  return todo;
})();