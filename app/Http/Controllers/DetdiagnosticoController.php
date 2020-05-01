<?php

namespace App\Http\Controllers;

use App;
use Gate;
use App\Paciente;
use App\Diagnostico;
use Illuminate\Http\Request;

class DetdiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = App\Paciente::orderby('nombre', 'asc')->get();
        $detdiagnosticos = App\Detdiagnostico::orderby('fecha', 'asc')->get();
        return view('detdiagnostico.index',compact('detdiagnosticos','pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('crear-detdiag'))
        {
            return redirect()->route('detdiagnostico.index');
        }
        $pacientes = App\Paciente::orderby('nombre', 'asc')->get();
        $diagnosticos = App\Diagnostico::orderby('tipo', 'asc')->get();
        return view('detdiagnostico.insert', compact('pacientes','diagnosticos'));
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
            'fecha' => 'required',
            'idPaciente' => 'required',
            'idDiagnostico' => 'required',
       
        ]);

        App\Detdiagnostico::create($request->all());

        return redirect()->route('detdiagnostico.index')
                        ->with('exito','Se ha registrado el Diagnostico correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detdiagnostico  $detdiagnostico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detdiagnostico = App\Detdiagnostico::join('pacientes','detdiagnosticos.idPaciente', 'pacientes.id')
                                ->join('diagnosticos','detdiagnosticos.idDiagnostico','diagnosticos.id')
                                ->select('detdiagnosticos.*', 'pacientes.nombre as paciente','diagnosticos.tipo as diagnostico')
                                ->where('detdiagnosticos.id', $id)
                                ->first();
        return view('detdiagnostico.view', compact('detdiagnostico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detdiagnostico  $detdiagnostico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('editar-detdiag'))
        {
            return redirect()->route('detdiagnostico.index');
        }
        $pacientes = App\Paciente::orderby('nombre', 'asc')->get();
        $diagnosticos = App\Diagnostico::orderby('tipo', 'asc')->get();
        $detdiagnostico = App\Detdiagnostico::findorfail($id);
        return view('detdiagnostico.edit', compact('detdiagnostico','pacientes','diagnosticos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detdiagnostico  $detdiagnostico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required',
            'idPaciente' => 'required',
            'idDiagnostico' => 'required',
       
        ]);


        $detdiagnostico = App\Detdiagnostico::findorfail($id);
        $detdiagnostico->update($request->all());

        return redirect()->route('detdiagnostico.index')
                        ->with('exito','Se ha modificado el Diagnostico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detdiagnostico  $detdiagnostico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('eliminar-detdiag'))
        {
            return redirect()->route('detdiagnostico.index');
        }
        $detdiagnostico = App\Detdiagnostico::findorfail($id);
        $detdiagnostico->delete();

        return redirect()->route('detdiagnostico.index')
                        ->with('exito','Se ha eliminado el Diagnostico correctamente');
    }
}
