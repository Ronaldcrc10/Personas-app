<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Comuna</title>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            transition: background-color 0.3s ease;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #e0a800;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Agregar Comuna</h1>
        <form method="POST" action="{{ route('comunas.store') }}">
            @csrf
            <!-- Código de Comuna (deshabilitado) -->
            <div class="mb-3">
                <label for="id" class="form-label">Código</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                <div id="idHelp" class="form-text">Código de la comuna (generado automáticamente).</div>
            </div>

            <!-- Nombre de la Comuna -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la Comuna</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Nombre de la comuna">
            </div>

            <!-- Municipio -->
            <div class="mb-3">
                <label for="Municipio" class="form-label">Municipio</label>
                <select class="form-select" id="Municipio" name="code" required>
                    <option selected disabled value="">Selecciona un municipio</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Botones de acción -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-2">Guardar</button>
                <a href="{{ route('comunas.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
