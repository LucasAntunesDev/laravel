<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index(){
        return view('animals.index');
    }

    public function register(){
        return view ('animals.register');
    }

    // public function store(){
        
    // }
}
