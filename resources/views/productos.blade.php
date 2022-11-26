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
                <h1 class="font-weight-light text-center">Agregar productos</h1><br>
                <p class="lead">
                    <div class="row">
                        <div class="col">
                            <form action="/store" method="post" >

                                @csrf

                                <div class="row">
                                    <div class="col-sm-6">

                                        <label for="nombre">Nombre del producto: </label>
                                        <input type="text" name="nombre" class="form-control" required><br>

                                        <label for="precio">Precio del producto: </label>
                                        <input type="number" name="precio"  class="form-control" required><br>

                                        <label for="color">Caracteristicas del producto: </label>
                                        <input type="text" name="caracteristicas" class="form-control" required><br>

                                        <button class="btn btn-info">Agregar</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre del producto</th>
                                        <th>Precio del producto</th>
                                        <th>Caracteristicas del producto</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datos as $item)
                                    <tr>
                                        <td scope="row">{{ $item->nombre }}</td>
                                        <td>$ {{ $item->precio}}.00</td>
                                        <td>{{ $item->caracteristicas}}</td>

                                        <td>
                                            <form action="{{route('edit')}}" method="get">
                                                <button type="submit" class="btn btn-warning">
                                                    <span>Editar</span>
                                                </button>
                                            </form>
                                        </td>

                                        <td>
                                            <form action="{{route('destroy', $item)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <td><button class="btn btn-danger " >Eliminar</button></td>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
