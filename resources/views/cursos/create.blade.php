@extends('layouts.plantilla')

@section('title','create')

@section('content')
<h1> Aqui se podrá crear algo </h1>

    <form action="{{route('cursos.store')}}" method="POST">

            @csrf

        <label >
            Nombre: 
            <br>
            <input type="text" name="name" value={{old('name')}}>

        </label>

        @error('name')
            <small>*{{$message}} </small>
        @enderror

        <br>
         <label >
            Descripción:
            <br>
            <textarea  name="descripcion" rows="5" >{{old('descripcion')}} </textarea>
        </label>

        @error('descripcion')
        <small>*{{$message}} </small>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value={{old('categoria')}}>
        </label>

        @error('categoria')
        <small>*{{$message}} </small>
        @enderror

        <br>
        <input type="submit" value="enviar formulario"> 
    </form>

@endsection