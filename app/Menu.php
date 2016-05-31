<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = ['orden','icono','ruta','tipo_menu','titulo','id_padre'];

    protected $hidden = ['id', 'created_at', 'updated_at'];
    
}
