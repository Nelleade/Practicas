<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticaLaravel extends Controller
{
    public function getAnimales(){
        $animales = ['Perro' , ' Gato' , ' Mono' , ' Hamster' , ' Tortuga.'];

        return response()->json(['mensaje' => 'Estos son mis animales', 'datos' => $animales]);
    }
}
