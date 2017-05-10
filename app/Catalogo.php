<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = "catalogo";
    public $primaryKey = false;
    protected $fillable = ['anio', 'marca', 'modelo', 'motor', 'codigo', 'descripcion', 'dato1', 'dato2'];
    public $timestamps = false;
}
