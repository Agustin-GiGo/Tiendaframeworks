@extends('layout.general')

@section('contenido')
 <form>
  <div class="form-group">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Categoria</label>
      <input type="text" class="form-control" id="validationDefault01" value="Electrodomestico " required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Nombre del Producto</label>
      <input type="text" class="form-control" id="validationDefault02" value="Frigobar" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Cantidad</label>
      <input type="text" class="form-control" id="validationDefault03" value="4" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Imagen</label>
      <input type="text" class="form-control" id="validationDefault04" value="Imagen" required>
    </div>

  </div>
<center>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Acepta termino y condiciones
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Guardar Cambios</button>
</center>  
</form>
@endsection