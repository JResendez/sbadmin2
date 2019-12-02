<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Ususario;

class usuariosController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
if (!$request->ajax()) return redirect('/');

$Ususarios = Ususario::orderBy('id', 'desc')->paginate(10);



return [
'usuarios' => $usuarios
];
}

public function selectUsusario(Request $request){
if (!$request->ajax()) return redirect('/');
$Ususarios = Ususario::where('estatus','=','1')
->select('id','nombre')->orderBy('nombre', 'asc')->get();
return ['Ususarios' => $Ususarios];
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
if (!$request->ajax()) return redirect('/');
$Ususario = new Ususario();
$Ususario->nombre = $request->nombre;
$Ususario->apellidos = $request->apellidos;
$Ususario->save();
}


/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request)
{
if (!$request->ajax()) return redirect('/');
$Ususario = Ususario::findOrFail($request->id);
$Ususario->nombre = $request->nombre;
$Ususario->apellidos = $request->apellidos;
$Ususario->estatus = 'activo';
$Ususario->save();
}

public function desactivar(Request $request)
{
if (!$request->ajax()) return redirect('/');
$Ususario = Ususario::findOrFail($request->id);
$Ususario->estatus = 'inactivo';
$Ususario->save();
}

public function activar(Request $request)
{
if (!$request->ajax()) return redirect('/');
$Ususario = Ususario::findOrFail($request->id);
$Ususario->estatus = 'activo';
$Ususario->save();
}


}
