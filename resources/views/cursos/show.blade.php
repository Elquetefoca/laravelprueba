@extends('layouts.plantilla')

@section('title','cursito de '.$id['name'])

@section('content')
<h1> Bienvenido a mis cursitos, estás en <?php echo $id['name'] ?></h1>
<a href="{{route('cursos.index')}}" >  volver al curso </a>
<p><a href="{{route('cursos.edit',$id)}}" >  Editar curso </a> </p>
<p>  <strong>Categoria: </strong>{{$id->categoria}} </p>
<p> descripcion: {{$id->descripcion}}  </p>

<form action="{{route('cursos.destroy',$id)}}" method="POST">
    @csrf
    @method('delete')
    <input type="submit" value="eliminar registro">
</form>

@endsection

