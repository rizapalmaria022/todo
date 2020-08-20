<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Todo List</title>

  <!-- Plugins Header -->
  @include('template.header')

<body>
  <!-- Container -->
  @yield('content')
  <!-- End Container -->

  <!-- Plugins Footer-->
  @include('template.footer')
  <!-- End Plugins Footer-->

  <!-- Resources -->
   @yield('resource') 
  <!-- End Resources-->  

</body>
</html>