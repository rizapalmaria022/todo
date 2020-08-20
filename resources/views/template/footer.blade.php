@extends('app')
@section('footer')
    <!-- Bootstrap -->
    <script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Jquery -->
    <script src="{{ asset('../node_modules/jquery/dist/jquery.min.js') }}"></script>


  <!-- Assets Footer-->  
    <!-- todo-js -->
    <script src="{{ asset('scripts/todo_list.js')}}"></script>
@endsection