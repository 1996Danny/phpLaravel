<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MiPrimerControlador extends Controller
{
    public function raiz()
    {
        return "Hola mundo desde el controlador";
    }
    public function saludo()
        {
            return "Hola mundo";
        }
    public function misNoticias ()
        {
            return "Noticias de la semana";
        }
    public function miHistoria ()
    {
        return "Historia de la empresa";
    }
    public function misClientes () {
        // logica para extraer clientes de la base de datos
        $clientes = DB::table('clientes')->get();
        return $clientes;
        
    }
    public function misPedidos (){
        // logica para extraer pedidos de la base de datos
        $pedidos = DB::table('pedidos')->
        join('clientes', 'pedidos.id_cliente', '=', 'clientes.id')-> get();
        return $pedidos;
    }

    public function misComidas () {
        // logica para extraer las comidas de la base de datos
        $comidas = DB::table('comidas')-> get();
        return $comidas;
    }

    public function filtrarClintePorrId ($idCliente) {
        //filtrar el clinete con id = idCliente
        $cliente = DB::table('clientes')-> where('id', $idCliente)-> first();
    
        return $cliente;
    }

    public function filtrarClientePorDni($dni){
        // filtrar cliente por dni
        $cliente = DB::table('clientes')-> where('dni', $dni)-> first();
        return $cliente;
    }

    public function dniMayorIgual ($dni) {
        //filtrar clientes con dni mayor e igual a dni
        $clientes = DB::table('clientes')-> where('dni', '>=', $dni)-> get();
        // $clientes = DB::table('clientes')-> where('dni', '>', $dni 'and' , '=', $dni)-> get();
        return $clientes;

    }

    public function filtrarNombreCoincidencia($apellido){
        //filtrar por nombre que comience con Per
        $clientes = DB::table('clientes')-> where('apellido', 'like', '%' . $apellido . '%')-> get();
        return $clientes;
    }

    public function eliminarCliente($id){
        // eliminar cliente con id = id
        $cliente = DB::table('clientes')-> where('id', $id)-> delete();


        return $cliente;
    }

}
