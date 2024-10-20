<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>List the Work</title>
  </head>
  <body>
    <div class="container">
        <h1>List the Work</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Titulo</th>
                <th scope="col">Año</th>
                <th scope="col">Tecnica</th>
                <th scope="col">Dimensiones</th>
                <th scope="col">Descripcion</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($works as $work)
              <tr>
                <th scope="row">{{$work->$id}}</th>
                <td>{{ $work->título}}</td>
                <td>{{ $work->año}}</td>
                <td>{{ $work->tecnica}}</td>
                <td>{{ $work->dimensiones}}</td>
                <td>{{ $work->descripcion}}</td>
                <td><span> Actions </span></td>
              </tr>                  
              @endforeach
            </tbody>
          </table>
        </div>    
  </body>
</html>