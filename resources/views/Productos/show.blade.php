@extends('layout.general')

@section('contenido')
<form>

    <div class="col-md-6 mb-3">
      <label for="Nombre">{{'Nombre Completo'}}</label>
      <input type="text" name="Nombre" class="form-control" id="Nombre" value="{{$usuario->Nombre}}">

      <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
      <input type="text" name="ApellidoPaterno" class="form-control" id="ApellidoPaterno" value="{{$usuario->ApellidoPaterno}}">

    </div>
</form>
@endsection