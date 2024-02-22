<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        $data = array('tittle' => 'Home Page');
        return view ('home',$data);
    }
}
