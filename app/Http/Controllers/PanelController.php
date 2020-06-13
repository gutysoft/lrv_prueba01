<?php

namespace App\Http\Controllers;

// use App\Usuarios;
use App\Usuario;
use Illuminate\Http\Request;

class PanelController extends Controller
{

    public function index()
    {   
        $acceso = Usuario::all();

        return view('paginas.panel', array(
            'acceso' => $acceso
        ));
    }

    public function show(Usuario $user)
    {   
        $this->authorize('view', $user);
        return view('paginas.panel');
    }
}
