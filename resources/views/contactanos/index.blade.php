@extends('layouts.plantilla')

@section('title','Contactanospls')

@section('content')
<h1> Envianos tus nudes pls</h1>
<h2> Aquí está el formulario, ahí manda el pack </h2>

<form action="{{route('contactanos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    <label>
        Mensaje:
        <br>
        <textarea name="mensaje" rows="5"></textarea>
        <br>
    </label>

    <input type="submit" value="Enviar mensaje">
</form>    

@endsection
