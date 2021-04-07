@extends('layouts.plantilla')

@section('title','cursito de '.$id['name'])

@section('content')
<h1> Bienvenido a mis cursitos, estás en <?php echo $id['name'] ?></h1>
<a href="{{route('cursos.index')}}" >  volver al curso </a>
<p>  <strong>Categoria: </strong>{{$id->categoria}} </p>
<p> descripcion: {{$id->descripcion}}  </p>
@endsection

