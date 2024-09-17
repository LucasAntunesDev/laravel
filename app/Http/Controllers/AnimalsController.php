<?php

namespace App\Http\Controllers;

use App\Mail\RegisteredAnimal;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AnimalsController extends Controller {
    public function index() {
        $data = Animal::all();

        return view('animals.index', ['animals' => $data]);
    }

    public function register() {
        return view('animals.register');
    }

    public function store(Request $form) {
        // $img = $form->file('image')->store('animals', 'images');

        $data = $form->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer',
        ]);

        // $data['image'] = $img;

        // Animal::create($data);
        Mail::to('alguem@batata.com')->send(new RegisteredAnimal);
        return;
        // return redirect()->route('animals');
    }

    # mostra tela de confirmar exclusão
    public function delete(Animal $animal) {
        return view('animals.delete', ['animal' => $animal]);
    }

    # remove do banco
    public function remove(Animal $animal) {
        $animal->delete();
        return redirect()->route('animals');
    }

    public function edit(Animal $animal) {
        return view('animals.edit', ['animal' => $animal]);
    }

    public function editStore(Request $form, Animal $animal) {
        $data = $form->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer'
        ]);

        $animal->fill($data);

        $animal->save();

        return redirect()->route('animals');
    }
}
