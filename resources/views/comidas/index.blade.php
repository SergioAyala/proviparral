@extends('admin.layout')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
<table class="table table-striped">
  <thead class="thead-active">





    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre Del Estudiante</th>
         <th scope="col">Dia y Hora que Ingresa el Alumno</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($comidas as $comida)
    <tr>
    <td><a href="{{ route('comidas.show', $comida->estudiantes_id)}}" class="btn btn-primary">{{$comida->id}}</a> </td>
      <td>  {{ $comida->estudiantes->nombres}}  {{ $comida->estudiantes->apellidos}}</td>
     <td>{{($comida->created_at)}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
{!! $comidas->render() !!}
<a href="{{ route('comidas.create', $comida->id)}}" class="btn btn-primary">Ingresar Comida</a>

</div>


    @endsection