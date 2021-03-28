@extends('app')

@section('content')
<h1>Felicidades has adoptado a {{$perro[0]->nombre}}</h1>
<h2><i class="fas fa-paw" style="color:red "></i></h2>
<h2>Te saluda con su patita</h2>
<a href="{{url('/')}}" class = "btn btn-primary">Volver</a>
@endsection