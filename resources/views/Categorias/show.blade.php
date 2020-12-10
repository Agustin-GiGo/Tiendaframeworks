@extends('layout.general')

@section('contenido')
  <form>
  <div>
  	<button type="button" class="btn btn-secondary btn-lg btn-block">Contenido</button>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de la categria: </label>
     <label for="inputEmail3" class="col-sm-2 col-form-label">Electronica </label>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad de la categoria</label>
    <label for="inputPassword3" class="col-sm-2 col-form-label">3</label>
  </div>
  <fieldset class="form-group">
  </fieldset>

</form>
@endsection