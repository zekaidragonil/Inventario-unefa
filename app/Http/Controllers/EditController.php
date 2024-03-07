<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class EditController extends Controller


{
    use HasRoles;
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
        $mostrar = true;
        $equipos = equipos::all();
        $user = Auth::User();
        if(Auth::user()->hasRole('admin')){
            return view('Edit', compact('equipos','mostrar', 'user'));

        }else{
            return redirect('/');

        }
    }

    public function update( Request $request ,  $id )
    {

    $Equipo = equipos::find($id);
    $Equipo->laboratorio = $request->laboratorio;
    $Equipo->mesa = $request->mesa;
    $Equipo->marca = $request->marca;
    $Equipo->nombre = $request->nombre;
    $Equipo->modelo = $request->modelo;
    $Equipo->serial = $request->serial;
    if ($request->hasFile('imagen')) {
        // Si se seleccionó una nueva imagen, se actualiza
        $Equipo->imagen = $request->file('imagen')->store('upload-equipos', 'public');
    }
    $Equipo->comentario = $request->comentario;
    $Equipo->save();

    return redirect('/edit')->with('success', 'El equipo se ha editado correctamente.');
    }
    public function delete($id)

    {
        $datos = equipos::find($id);
        $nombre = $datos->nombre;
         $datos->delete();
        return redirect('/edit')->with('msjdelete', 'el'. ($nombre). 'fue eliminado');
    }

}
