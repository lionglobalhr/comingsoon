<?php

namespace App\Http\Controllers;

class HomePageController extends Controller
{

    public function show(){
        return view('pages.home');
    }

}