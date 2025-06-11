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
    
}
