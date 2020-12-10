@extends('layout.general')

@section('contenido')
@if(session('notificacion'))
    <div class="card-body">
      <div class="alert alert-success" role="alert">
        {{ session('notificacion') }}
      </div>
    </div>
@endif
<a href="{{url('Usuarios/create')}}"> <button type="button" class="btn btn-primary btn-lg">Crear Usuario</button></a>

<table class="table table-light table-hover ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Correo Electronico</th>
      
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>

  @foreach ($usuarios as $usuario)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>
      <img src="{{ asset('storage').'/'.$usuario->Foto}}" class="img-thumbnail img-fluid" alt="" width="100">
      </td>
      <td>{{$usuario->Nombre}} {{$usuario->ApellidoPaterno}} {{$usuario->ApellidoMaterno}}</td>
      <td>{{$usuario->Correo}}</td>

      <td>
        <form action="{{ url('/Usuarios/'.$usuario->id) }}" method="POST">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <a href="{{ url('/Usuarios/'.$usuario->id.'/edit') }}" class="btn btn-success">Editar</a>
          <a href="{{ url('/Usuarios/'.$usuario->id) }}" class="btn btn-warning">Mostrar</a>
           
          <button type="submit" onclick= "return confirm('Desea eliminar este Usuario')" class="btn btn-danger">Borrar</button>
        </form>
      </td>
    </tr>
  </tbody>
  @endforeach
  
    
</table>
@endsection