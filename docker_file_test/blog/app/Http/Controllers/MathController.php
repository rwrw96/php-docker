<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum($x, $y){
        $sum = $x + $y;
        
        return View::make('sum', ['x' => $x, 'y' => $y, 'sum' => $sum]);
    }
}
