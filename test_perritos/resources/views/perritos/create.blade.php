@extends('app')

@section('content')
<h1>Ingreso de perritos</h1>
<form action = "{{url('/perritos')}}" method = "POST" enctype="multipart/form-data" onSubmit="return validarForm()">
    @csrf
    @include('perritos.form')
    <div class="form-group">
        <input type="text" name = "adoptado" id = "adoptado" value = "false" style = "display:none" > 
    </div>
</form>

@if($mensaje != "no")
<div class="alert alert-danger" role="alert">
  <p>El nombre que intenta ingresar ya existe</p>
</div>
@endif
@endsection