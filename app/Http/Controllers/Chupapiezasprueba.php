<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class Chupapiezasprueba extends Controller
// {
//     public function welcome()
//     {
//     	$chingole = 5;
//     	$chupamedias = 10;
//     	$pericotes = $chingole/$chupamedias;
//     	return "El valor de pericotes es de la conchasumare $pericotes";
//     }
// }

class Chupapiezasprueba extends Controller
{
    public function welcome()
    {

    	return view('welcome');
    }
}