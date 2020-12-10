<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=Usuarios::paginate(5);
        return view('Usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nombre'=> 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Correo' => 'requided|email',
            'Foto' => 'required|max:10000|mines:jpeg,png,jpg',
        ]);


        $datosUsuarios=request()->except('_token');

        if($request->hasFile('Foto')){
            $datosUsuarios['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Usuarios::insert($datosUsuarios);
        $notificacion= 'El usuario se ha creado correctamente.';
        return redirect('Usuarios')->with(compact('notificacion'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $usuario = Usuarios::findOrFail($id);
        return view('Usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $usuario= Usuarios::findOrFail($id);
        return view('Usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            $usuario= Usuarios::findOrFail($id);
            
            Storage::delete('public/'.$usuario->Foto);

            $datosUsuarios['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Usuarios::where('id','=',$id)->update($datosUsuarios);

        $usuario= Usuarios::findOrFail($id);
        $notificacion= 'El usuario se ha modificado correctamente.';
        return redirect('Usuarios')->with(compact('notificacion'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario= Usuarios::findOrFail($id);
            
        if (Storage::delete('public/'.$usuario->Foto)){
            Usuarios::destroy($id);

        }

        $notificacion= 'El usuario "'. $usuario->Nombre .'" Se ha eliminado correctamente.';
        return redirect('Usuarios')->with(compact('notificacion'));
    }
}
