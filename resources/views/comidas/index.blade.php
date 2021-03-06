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



   <h1>
        <small>Historico de Almuerzos</small>
      </h1>


    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Nombre Del Estudiante</th>
       <th scope="col">Permiso para Almorzar</th>
         <th scope="col">Dia y Hora que Ingresa para Almorzar</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($comidas as $comida)
    <tr>
    <td><a href="{{ route('comidas.show', $comida->estudiantes_id)}}" class="btn btn-primary">{{$comida->id}}</a> </td>
      <td>  {{ $comida->estudiantes->nombres}}  {{ $comida->estudiantes->apellidos}}</td>
      <td>  {{ $comida->estudiantes->permisos_almuerzo_id}}</td>
     <td>{{($comida->created_at)}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
{!! $comidas->render() !!}

</div>


    @endsection