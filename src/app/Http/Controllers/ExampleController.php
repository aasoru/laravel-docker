<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function test(){
        //return view('welcome');
        return response()->json(['message' => 'hola']);
    }
}
