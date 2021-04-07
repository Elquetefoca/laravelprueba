@extends('layouts.plantilla')

@section('title','cursitos')

@section('content')
<h1> Bienvenidos a mis cursos  </h1>
    <a href="{{route('cursos.create')}}"> crear cursos </a>
        @foreach($cursos as $curso)
            <li> 
                <a href="{{route('cursos.show',$curso->id)}}">  {{$curso->name}}   </a>    
            </li>
        @endforeach 

        {{$cursos->links()}}
@endsection

