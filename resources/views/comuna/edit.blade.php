<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Comuna</title>

    <style>
        body {
            background-color: #f4f6f9;
        }
        .container {
            margin-top: 50px;
            max-width: 700px;
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
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            transition: background-color 0.3s ease;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }
        .form-select, .form-control {
            box-shadow: none;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }
        .form-select:focus, .form-control:focus {
            border-color: #007bff;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Editar Comuna</h1>
        
        <form method="POST" action="{{ route('comunas.update', ['comuna' => $comuna->comu_codi]) }}">
            @method('put')
            @csrf
            
            <!-- Campo ID deshabilitado -->
            <div class="mb-3">
                <label for="codigo" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" disabled value="{{ $comuna->comu_codi }}">
                <div class="form-text">ID de la comuna</div>
            </div>

            <!-- Campo de nombre de comuna -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la Comuna</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ $comuna->comu_nomb }}" placeholder="Escriba el nombre de la comuna">
            </div>

            <!-- Selección de municipio -->
            <div class="mb-3">
                <label for="Municipio" class="form-label">Municipio</label>
                <select class="form-select" id="Municipio" name="code" required>
                    <option selected disabled value="">Elige una opción</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->muni_codi }}" {{ $municipio->muni_codi == $comuna->muni_codi ? 'selected' : '' }}>
                            {{ $municipio->muni_nomb }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botones de acción -->
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('comunas.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
