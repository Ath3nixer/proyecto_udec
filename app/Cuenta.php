<?php

namespace SICTIC;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;

class Cuenta extends Authenticatable
{
    protected $table = 'cuentas';

    protected $fillable = ['rol_id', 'estadocuenta', 'tipodoc', 'numdoc', 'email', 'nombre', 'apellido', 'direccion', 'celular'];
    protected $hidden = [
        'password',
    ];
}
