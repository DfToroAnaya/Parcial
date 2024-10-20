<x-app-layout>
  
      <h2 class="font-semibold text-x5 text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Works') }}
      </h2>
 

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  
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
        <a href="{{ route('works.create')}}" class=" btn btn-success">Add</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Artista</th>
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
                <th scope="row">{{$work->id}}</th>
                <td>{{ $work->nombre}}</td>
                <td>{{ $work->título}}</td>
                <td>{{ $work->año}}</td>
                <td>{{ $work->tecnica}}</td>
                <td>{{ $work->dimensiones}}</td>
                <td>{{ $work->descripcion}}</td>
                <td>
                  <a href="{{ route('works.edit', ['work' => $work->id])}}" class="btn btn-info">Edit</a>

                  <form action="{{ route('works.destroy', ['work' => $work->id])}}"
                    method="POST" style="display: inline-block">
                  @method('delete')
                  @csrf
                  <input class="btn btn-danger" type="submit" value="Delete"> 
                </form>
                </td>
              </tr>                  
              @endforeach
            </tbody>
          </table>
        </div>    
  </body>
</html>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>





