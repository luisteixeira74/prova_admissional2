<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>{{ env('APP_NAME') }}</title>
</head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Escola de Informática</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/aluno">Alunos</a>
        <a class="p-2 text-dark" href="/curso">Cursos</a>
        <a class="p-2 text-dark" href="/matricula"><b>Matrículas</b></a>
      </nav>
    </div>

    
    <div class="container">
      <div class="card-deck mb-3 text-center">
        @yield('content')
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">&copy; 2021 by luisteixeira.br@gmail.com</small>
          </div>
        </div>
      </footer>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({"dateFormat": "dd/mm/yy"});
  } );
  </script>
</html>
