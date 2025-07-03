<?php
// para crear nuevos controladores php artisan make:controller ClienteController --resource
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = DB::table('clientes')->get();
        return $clientes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insertar un nuevo cliente
        DB::table('clientes')-> insert([

            'apellido' => $request['apellido'],
            'nombre' => $request['nombre'],
            'dni' => $request['dni'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
        ]);
        return response()-> json(['message' => 'Cliente agregado correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = DB::table('clientes')-> where('id', $id)-> first();
    
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        DB::table('clientes') -> where ('id', $id) -> update([
            'apellido' => $request['apellido'],
            'nombre' => $request['nombre'],
            'dni' => $request['dni'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
        ]);
        return response()-> json(['message' => 'Cliente actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = DB::table('clientes')-> where('id', $id)-> delete();
    
        return response()->json([
            'id' => $id,
            'mensaje' => 'Cliente eliminado con exito '], 200);
    }
}
