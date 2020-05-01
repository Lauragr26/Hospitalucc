<?php

namespace App\Http\Controllers;

use App;
use Gate;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = App\Paciente::orderby('nombre', 'asc')->get();
        return view('paciente.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('crear-paciente'))
        {
            return redirect()->route('paciente.index');
        }
        return view('paciente.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'nacimiento' => 'required',
            'genero' => 'required',
            'nregistro' => 'required',
            'ncama' => 'required',
        ]);
        App\Paciente::create($request->all());

        return redirect()->route('paciente.index')
                        ->with('exito','Se ha registrado el Paciente correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $paciente = App\Paciente::findorfail($id);
        return view('paciente.view', compact('paciente'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('editar-paciente'))
        {
            return redirect()->route('paciente.index');
        }
        $paciente = App\Paciente::findorfail($id);
        return view('paciente.edit', compact('paciente'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'nacimiento' => 'required',
            'genero' => 'required',
            'nregistro' => 'required',
            'ncama' => 'required',
        ]);

        $paciente = App\Paciente::findorfail($id);
        $paciente->update($request->all());

        return redirect()->route('paciente.index')
                        ->with('exito','Se ha modificado el Paciente correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('eliminar-paciente'))
        {
            return redirect()->route('paciente.index');
        }
        $paciente = App\Paciente::findorfail($id);
        $paciente->delete();

        return redirect()->route('paciente.index')
                        ->with('exito','Se ha eliminado el Paciente correctamente');
    }
}
