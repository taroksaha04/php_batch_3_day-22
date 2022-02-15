<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        //return 'hello Mr.Tarok Saha';
        return 'Hello BITM';
    }
    public function bitm(){

        //return 'Hello BITM';
        return view('demo');
    }
}
