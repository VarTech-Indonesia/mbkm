<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    //home
   public function index(){
    $data = [
                 'title' => 'Home | merdekabelajar'
             ];
    return view('pages.home', $data);
   }
    
   public function pkkm(){
    $data = [
                 'title' => 'PKKM | merdekabelajar'
             ];
    return view('pages.pkkm', $data);
   }
}
