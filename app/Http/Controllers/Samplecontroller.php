<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Samplecontroller extends Controller
{
    public function index(){
      return view('sample');
    }
}
