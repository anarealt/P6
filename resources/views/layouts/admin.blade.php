<!DOCTYPE html>
<html>
 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula Virtual</title>

    <!-- Custom CSS -->
    @section('styles_laravel')

    <!-- Script -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" type="text/css" >


    <!-- Custom CSS -->
    <link href="public/css/app.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    @show

    @yield('mis_estilos')
  </head>

  <body>

    <!-- toolbar user -->
    <nav class="navbar navbar-dark bg-dark">
      <!-- Navbar content -->
      <a class="navbar-brand" href="#">Aula Virtual</a>
      
      <div class="justify-content-end my-lg-0">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('logout') }}">Cerrar sesión</a>
          </li>
        </ul>
      
      </div>
    </nav>

    <!-- container -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(Session::has('success'))
    <div class="alert alert-info">
        {{Session::get('success')}}
    </div>
    @endif

   <!-- siderbar -->
    <div class="row">
      <div class="col-2">
        <div class="nav flex-column nav-pills m-1" id="v-pills-tab" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-user-tab" href="{{action('UserController@index')}}" role="tab" aria-controls="v-pills-user" aria-selected="false">Usuarios</a>
          <a class="nav-link" id="v-pills-course-tab" href="{{action('CourseController@index')}}" role="tab" aria-controls="v-pills-course" aria-selected="true">Cursos</a>
          <a class="nav-link" id="v-pills-schedule-tab" href="{{action('ScheduleController@index')}}" role="tab" aria-controls="v-pills-schedule" aria-selected="false">Horarios</a>
          <a class="nav-link" id="v-pills-class-tab" href="{{action('ClassroomController@index')}}" role="tab" aria-controls="v-pills-class" aria-selected="false">Clases</a>
        </div>
      </div>

      <div class="col-10">
        <div class="container">
          <!-- content -->
          @yield('content')
        </div>
      </div>

    </div>

   

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
  </body>
</html>