<?php

namespace App\Policies;

use App\Usuario;
// use App\Usuarios;
use Illuminate\Auth\Access\HandlesAuthorization;

class UsuariosPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the usera can view the usuarios.
     *
     * @param  \App\Usuarios  $usera
     * @param  \App\Usuarios  $usuarios
     * @return mixed
     */
    public function view(Usuario $usera, Usuario $usuarios)
    {
        return $usera->id === $usuarios->id;
    }



    /**
     * Determine whether the usera can update the usuarios.
     *
     * @param  \App\Usuarios  $usera
     * @param  \App\Usuarios  $usuarios
     * @return mixed
     */
    public function update(Usuario $usera, Usuario $usuarios)
    {
        //
    }

}
