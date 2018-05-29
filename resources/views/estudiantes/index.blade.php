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

{!! Form::open([ 'route' => 'estudiantes.index','method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}


{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresar Codigo de Barra del Estudiante, Apellidos o Rut']) !!}




{!! Form::close() !!}
</div>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Codigo de Barra</th>
      <th scope="col">Nombre Del Estudiante</th>
      <th scope="col">Curso</th>
      <th scope="col">Enseñanza</th>
      
     
   

    </tr>
  </thead>
  <tbody>
  @foreach($estudiantes as $estudiante)
    <tr>
    <td><a>{{$estudiante->id}}</a> </td>
      <td><a href="{{ route('estudiantes.show', $estudiante->id)}}" class="btn btn-primary">{{$estudiante->codigo_barra}}</a> </td>
     <td>{{($estudiante->nombres)}} {{($estudiante->apellidos)}}</td>
     <td>  {{ $estudiante->cursos->nombre_curso}}</td>
     <td>{{ $estudiante->ensenanzas->nombre_ensenanza}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

  <div class="row">
    <div class="col-md-2 col-md-offset-5">

{!! $estudiantes->render() !!}
</div>

</div>
</div>


    @endsection