<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index() {
        $data = Animal::all();
        return view('animals.index', ['animals' => $data]);
    }

    public function register() {
        return view('animals.register');
    }

    public function store(Request $form) {
        $data = $form->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer'
        ]);

        Animal::create($data);

        return redirect()->route('animals');
    }

    public function delete(Animal $animal) {
        return view('animals.delete', ['animal' => $animal]);
    }

    public function edit(Animal $animal) {
        return view('animals.edit', ['animal' => $animal]);
    }

    public function editSore(Request $form, Animal $animal){
        $data = $form->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer'
        ]);

        $animal->fill($data);

        $animal->save();

        return redirect()->route('animals');
    }
}