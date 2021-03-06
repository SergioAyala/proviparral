@extends('admin.layout')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
         
         
        
   <h1>
        <small>Cursos</small>
      </h1>
               
           
            </div>
        </div>
    </div>


    <div class="container">
<table class="table table-striped">
  <thead class="thead-active">

    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Nombre Del Curso</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cursos as $curso)
    <tr>
    <td><a class="btn btn-primary">{{$curso->id}}</a> </td>
     <td>{{($curso->nombre_curso)}}</td>
  
   <!--  <td>
          {!! Form::open(['method' => 'DELETE','route' => ['cursos.destroy', $curso->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}</td> -->
</td>
    </tr>
    @endforeach
  </tbody>
       
</table>
{!! $cursos->render() !!}
 <!-- <a class="btn btn-primary" href="{{ route('cursos.create') }}">Ingresar Curso</a> -->

</div>


    @endsection