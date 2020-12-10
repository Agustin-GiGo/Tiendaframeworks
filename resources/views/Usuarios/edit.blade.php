@extends('layout.general')

@section('contenido')

 <form action="{{ url('/Usuarios/' . $usuario->id) }}" method="POST" enctype="multipart/form-data">
 {{ csrf_field() }}
 {{method_field('PATCH') }}

    <div class="col-md-6 mb-3">
    
<a href="{{ url('/Usuarios') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</button></a>
                        <a href="{{ url('/Usuarios/' . $usuario->id . '/edit') }}" title="Edit usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('Usuarios' . '/' . $usuario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete usuario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Borrar</button>
                        </form>
                        <br/>
                        <br/>

      <label for="Nombre">{{'Nombre Completo'}}</label>
      <input type="text" name="Nombre" class="form-control" id="Nombre" value="{{$usuario->Nombre}}" required>

      <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
      <input type="text" name="ApellidoPaterno" class="form-control" id="ApellidoPaterno" value="{{$usuario->ApellidoPaterno}}" required>

      <label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
      <input type="text" name="ApellidoMaterno" class="form-control" id="ApellidoMaterno" value="{{$usuario->ApellidoMaterno}}" required>

      <label for="Correo">{{'Correo Electronico'}}</label>
      <input type="email" name="Correo" class="form-control" id="Correo" value="{{$usuario->Correo}}" required>

      <label for="Password">{{'Contraseña'}}</label>
      <input type="text" name="Password" class="form-control" id="Password" value="{{$usuario->Password}}" required>


      <label for="Foto">{{'Foto'}}</label>
      <br/>
      <img class="img-fluid" src="{{ asset('storage').'/'.$usuario->Foto}}" alt="" width="100">     
      <br/>
      <input type="file" name="Foto" class="form-control" id="Foto" value="">

     
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">Acepta termino y condiciones</label>

      <div class="col-sm-10">
        <button class="btn btn-primary" type="submit">Guardar Cambios</button>
      </div>

    </div>
</form>
@endsection