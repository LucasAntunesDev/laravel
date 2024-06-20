<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index() {
        return view('animals.index');
    }

    public function register() {
        return view('animals.register');
    }

    public function store(Request $form) {
        $dados = $form->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer'
        ]);

        // var_dump($dados);
        Animal::create($dados);
        echo 'Tudo certo!';
    }
}