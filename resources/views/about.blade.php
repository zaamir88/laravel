@extends('app')
@section('title','Home')

@section('sidebar')
    @parent

    <p>Este es un codigo en el about blade</p>

@endsection


@section('content')
    <p>Esto es parte del cuerpo del contenido de about!!!! ;)</p>
@endsection