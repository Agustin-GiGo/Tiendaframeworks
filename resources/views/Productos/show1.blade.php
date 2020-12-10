@extends('layout.general')

@section('contenido')

<form>
  <div>
  	<button type="button" class="btn btn-secondary btn-lg btn-block">Datos del Producto</button>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Categoria: </label>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Ropa </label>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre del Producto: </label>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Cuello V </label>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad: </label>
    <label for="inputPassword3" class="col-sm-2 col-form-label">10</label>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Imagen: </label>
    <label for="inputPassword3" class="col-sm-2 col-form-label">Imagen</label>
  </div>
  <fieldset class="form-group"></fieldset>
</form>
@endsection