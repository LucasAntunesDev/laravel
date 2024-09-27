<h1>Animal cadastrado</h1>
<p>Olha que supimpa! Um novo animal foi cadastrado.</p>
<p class="flex flex-col gap-2 justify-center">
    <strong>Nome:</strong> {{$animal->name}}
    <strong>Idade:</strong> {{$animal->age}}
</p>

<p>
    Olha a latinha do querido
    <br>
    <img src="{{$message->embed('img/'. $animal->image)}}">
</p>

<p>Para saber mais, visite <a href="{{route('animals.show', $animal->id)}}">o perfil do animal</p>
