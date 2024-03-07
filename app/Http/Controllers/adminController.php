<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mostrar = false;
        $equipos = equipos::all();
        $user = Auth::User();
        return view('admin', compact('equipos','mostrar','user'));
    }

    public function store(Request $request)
    {
  //dd($request->all());

    $request->validate([
    'laboratorio' => 'required',
    'mesa' => 'required',
    'marca' => 'required',
    'nombre' => 'required',
    'serial' => 'required',
    'modelo' => 'required'

    ]);

    $Equipo = new equipos;
    $Equipo->laboratorio = $request->laboratorio;
    $Equipo->mesa = $request->mesa;
    $Equipo->marca = $request->marca;
    $Equipo->nombre = $request->nombre;
    $Equipo->modelo = $request->modelo;
    $Equipo->serial = $request->serial;
    $Equipo->imagen = $request['imagen']->store('upload-equipos', 'public');
    $Equipo->comentario = $request->comentario;
    $Equipo->save();
    return redirect()->route('admin')
    ->with('success','El equipo se ha guardado correctamente.');
    }

}
