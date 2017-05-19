<?php

namespace SICTIC;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    protected $fillable = ['rol', 'descripcion'];
}
