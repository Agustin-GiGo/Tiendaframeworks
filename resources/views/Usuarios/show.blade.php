@extends('layout.general')

@section('contenido')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                        <a href="{{ url('/Usuarios') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</button></a>
                        <a href="{{ url('/Usuarios/' . $usuario->id . '/edit') }}" title="Edit usuario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('Usuarios' . '/' . $usuario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete usuario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr><th>Foto: <img class="img-fluid" src="{{ asset('storage').'/'.$usuario->Foto}}" alt="" width="90"></th>
                                    </tr>
                                    <tr>
                                        <th>Id: {{ $usuario->id }}</th>
                                    </tr>

                                    <tr><th>Nombre Completo: {{ $usuario->Nombre }} {{ $usuario->ApellidoPaterno }} {{ $usuario->ApellidoMaterno }}</th>
                                    </tr>
                                    <tr><th>Correo Electronico: {{ $usuario->Correo }}</th>
                                    </tr>
                                    

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection