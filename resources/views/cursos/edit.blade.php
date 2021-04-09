@extends('layouts.plantilla')

@section('title','Cursos Edit papi')

@section('content')
<h1> Edita lo que desees papi </h1>

    <form action="{{route('cursos.update',$curso)}}" method="POST">

            @csrf

            @method('put')
        <label >
            Nombre: 
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
         <label >
            Descripción:
            <br>
            <textarea  name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <input type="submit" value="actualizar  formulario"> 
    </form>

@endsection