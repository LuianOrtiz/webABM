<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    use HasFactory;

    protected $guarded = [];
}


/*

uso para registros de prueba
php artisan tinker
use App\Models\Liga;
    $liga = new Liga;
    $liga->nombre_liga = "Super campeones";
    $liga->descripcion = "Super liga chingona nomas";


Para guardar el objeto liga en nuestra tabla ligas
    $liga->save();

para modificar
    $liga->save();


*/

