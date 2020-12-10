@extends('layout.general')

@section('contenido')

<a href="/Productos/create"> <button type="button" class="btn btn-primary btn-lg btn-block">Nuevo Producto</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Categorias</th>
      <th scope="col">Nombre Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>Electrodomestico</td>
      <td>Frigobar</td>
      <td>4</td>
      <td>Imagen</td>
      <td>
      	<a href="{{ url('Productos/1/edit') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Productos/1/show') }}" class="btn btn-warning">Mostrar</a>
      	<a href="{{ url('Productos') }}" onclick= "return confirm('¿Está seguro eliminar este Producto?')" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    <tr>
    <td>Ropa</td>
      <td>Cuello V</td>
      <td>10</td>
      <td>Imagen</td>
      <td>
      	<a href="{{ url('Productos/1/edit1') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Productos/1/show1') }}" class="btn btn-warning">Mostrar</a>
      	<a href="{{ url('Productos') }}" onclick= "return confirm('¿Está seguro eliminar este Producto?')" class="btn btn-danger">Eliminar</a>
      </td>
    </tr>
    <tr>
    <td>Electronica</td>
      <td>TV Samsung</td>
      <td>5</td>
      <td>Imagen</td>
      <td>
      	<a href="{{ url('Productos/1/edit2') }}" class="btn btn-success">Editar</a>
      	<a href="{{ url('Productos/1/show2') }}" class="btn btn-warning">Mostrar</a>
      	<a href="{{ url('Productos') }}" onclick= "return confirm('¿Está seguro eliminar este Producto?')" class="btn btn-danger">Eliminar</a>

      </td>
    </tr>
  </tbody>
</table>
@endsection