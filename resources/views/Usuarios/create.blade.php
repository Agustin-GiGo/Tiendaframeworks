@extends('layout.general')
@section('contenido')
  <div class="form-row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{url('/Usuarios')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}

    <div class="col-md-6 mb-3">
      <label for="Nombre">{{'Nombre Completo'}}</label>
      <input type="text" name="Nombre" class="form-control" id="Nombre" value="">

      <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
      <input type="text" name="ApellidoPaterno" class="form-control" id="ApellidoPaterno" value="">

      <label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
      <input type="text" name="ApellidoMaterno" class="form-control" id="ApellidoMaterno" value="">

      <label for="Correo">{{'Correo Electronico'}}</label>
      <input type="email" name="Correo" class="form-control" id="Correo" value="">

      <label for="Password">{{'Contraseña'}}</label>
      <input type="text" name="Password" class="form-control" id="Password" value="">


      <label for="Foto">{{'Foto'}}</label>
      <input type="file" name="Foto" class="form-control" id="Foto" value="">


      <div class="col-sm-10">
        <button class="btn btn-primary" type="submit">Guardar</button>
      </div>
    </div>
  </div>

</form>
@endsection