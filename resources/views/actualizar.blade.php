<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        <div class="card border-0 shadow ">
            <div class="card-body p-5">
                <h1 class="font-weight-light text-center">Actualizar  productos</h1><br>
                <p class="lead">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('update', $producto)}}"  method="POST">

                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="nombre">Nombre del producto: </label>
                                        <input type="text" name="nombre" class="form-control" required value="{{ $producto->nombre }}"><br>

                                        <label for="precio">Precio del producto: </label>
                                        <input type="number" name="precio"  class="form-control" required value="{{ $producto->precio }}"><br>

                                        <label for="color">Caracteristicas del producto: </label>
                                        <input type="text" name="caracteristicas" class="form-control" required value="{{ $producto->caracteristicas }}"><br>

                                        <button class="btn btn-info">Actualizar datos</button>
<br><br>
                                        <a href="/" class="btn btn-success">Regresar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                </p>
            </div>
        </div>
    </div>
