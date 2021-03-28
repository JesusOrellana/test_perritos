@extends('app')

@section('content')
<h1>Modificar datos perritos</h1>
<form action = "{{url('/perritos/'. $perro->id)}}" method = "POST" enctype="multipart/form-data" onSubmit="return validarForm()">
    @csrf
    {{ method_field('PATCH') }}
    <div class="form-group">
        <label for="adoptado">¿es Adoptado?</label>
        <select class="form-control" id="adoptado" name = "adoptado">
            @if($perro->adoptado)
                <option value = "true">Si</option>
                <option value = "false">No</option>
            @else
                <option value = "false">No</option>
                <option value = "true">Si</option>
            @endif
        </select>
    </div>
    @include('perritos.form')
</form>
@if($mensaje != "no")
<div class="alert alert-danger" role="alert">
  <p>El nombre que intenta ingresar ya existe</p>
</div>
@endif
@endsection