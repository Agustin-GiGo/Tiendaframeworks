@extends('layout.general')

@section('contenido')
<a href="/Categorias/create"> <button type="button" class="btn btn-primary btn-lg btn-block">Crear Categoria</button></a>

<table class="table">
  <thead>
    <tr>
      <th  class = ?primay  scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">Electronica</th>
      <td>3</td>
      <td>
      	<a href="{{ url('Categorias/1/edit') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Categorias/1/show') }}" class="btn btn-warning">Mostrar</a>
      	<a href="{{ url('Categorias') }}" onclick= "return confirm('Confirmar')" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    <tr>
      <th scope="row">Electrodomestico</th>
      <td>3</td>
      <td>
      	<a href="{{ url('Categorias/1/edit') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Categorias/1/show') }}" class="btn btn-warning">Mostrar</a>
      	<a href="{{ url('Categorias') }}" onclick= "return confirm('Confirmar')" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    <tr>
      <th scope="row">Ropa</th>
      <td>3</td>
      <td>
      	<a href="{{ url('Categorias/1/edit') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Categorias/1/show') }}" class="btn btn-warning">Mostrar</a>
      	<a href="{{ url('Categorias') }}" onclick= "return confirm('Confirmar')" class="btn btn-danger">Eliminar</a>

      </td>
    </tr>
  </tbody>
</table>
@endsection