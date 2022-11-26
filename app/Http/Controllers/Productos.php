<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class Productos extends Controller{

    public function index(){
        $datos = Producto::all();
        return view('productos', compact('datos'));
    }

          //sirve para guardar datos de la base de datos
          public function store (Request $request){

            $producto= new Producto();
            $producto->nombre=$request->post ('nombre');
            $producto->precio=$request->post('precio');
            $producto->caracteristicas=$request->post('caracteristicas');

            $producto->save();
            return redirect('/');

        }

    //este metodo nos sirve para traer los dstos que van a editar
    //y los coloca en un formulario
    public function edit(Producto $producto){

        return view('actualizar', compact('producto'));
    }


    public function show (Producto $producto){
        //sirve para obtener un registro de la tabla
        return view('eliminar');

    }
    public function update(Request $request , Producto $producto){

        //este metodo actualiza los datos en la bd
        $producto = Producto::find($id);

        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->caracteristicas=$request->caracteristicas;

        $personas->save();

        return redirect('/');

    }
    public function destroy(Producto $producto){
        $producto->delete();
        return redirect('/');
    }




}
