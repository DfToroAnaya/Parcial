<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Work</title>
  </head>
  <body>
    <div class="container"><h1>Edit Work</h1>
        <form method="POST" action="{{ route('works.update', ['work' => $work->id])}}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">Id</label>
              <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" 
              disabled="disabled" value="{{ $work->id}}">
              <div id="idHelp" class="form-text">Work Id</div>
            </div>

            <div class="mb-3">
              <label for="titulo" class="form-label">Titulo</label>
              <input type="text" required class="form-control" id="titulo" aria-describedby="tituloHelp"
              name="titulo" placeholder="Titulo Work"  value=" {{ $work->título}}">
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">Año</label>
                <input type="number" class="form-control" id="año" aria-describedby="añoHelp"
                name="año" placeholder="Año Work" value="{{ $work->año}}">
              </div>

              <div class="mb-3">
                <label for="tecnica" class="form-label">Tecnica</label>
                <input type="text" class="form-control" id="tecnica" aria-describedby="tecnicaHelp"
                name="tecnica" placeholder="Tecnica" value="{{ $work->tecnica}}">
              </div>

              <div class="mb-3">
                <label for="dimensiones" class="form-label">Dimensiones</label>
                <input type="text" class="form-control" id="dimensiones" aria-describedby="dimensionesHelp"
                name="dimensiones" placeholder="Dimensiones Work" value="{{ $work->dimensiones}}">
              </div>

              <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" aria-describedby="descripcionHelp"
                name="descripcion" placeholder="Descripcion Work" value="{{ $work->descripcion}}">
              </div>

              <div class="mb-3">
                <label for="artista_id" class="form-label">Artista</label>
                <select class="form-control" id="artista_id" name="artista_id" required>
                  @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->nombre }}</option>
                  @endforeach
                </select>
              </div>

              <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('works.index')}}" class="btn btn-warning">Cancel</a>
              </div>

            
          </form>
    </div>
    

    

  </body>
</html>