@extends('app')

@section('content')
<a href="{{url('perritos/create')}}" class = "btn btn-primary">+ Crear Perrito</a>
<h1>Lista Perritos</h1>
<table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">-</th>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Color</th>
        <th scope="col">Raza</th>
        <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
            @foreach($perros as $per) 
            <tr>
                <td>
                @if($per->adoptado)
                <p>Perrito Adoptado</p>
                @else
                    <form action="{{ url('/adoptar/' . $per->id) }}" method = "GET">
                        @csrf
                        <input type="submit" class = "btn btn-warning" onclick=" return confirm('¿quieres adoptar este perrito?')"
                        value = "Adoptar">
                    </form>
                @endif
                </td>
                <th scope="row">
                @if($per->adoptado)
                    <i class="fas fa-paw" style="color:red "></i>
                @else
                    {{$per->id}}
                @endif
                </th>
                <td>{{$per->nombre}}</td>
                <td>{{$per->color}}</td>
                <td>{{$per->raza}}</td>
                <td class = "row">
                    <a href="{{url('perritos/' . $per->id . '/edit')}}" class = "btn btn-success">Modificar</a>  
                    <form action="{{url('perritos/'. $per->id)}}" method = "POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input type="submit" class = "btn btn-danger" onclick=" return confirm('¿seguro que quieres borrar los datos de este perrito?')"
                    value = "eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
@endsection