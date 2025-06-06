<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
