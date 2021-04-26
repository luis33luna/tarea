<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articulos = Empleado::paginate(15);
        //dd($articulos);
        return view('empleado.index')->with('empleados', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleado();
        $empleados->Nombres = $request->get('Nombres');
        $empleados->ApellidoPaterno = $request->get('ApellidoPaterno');
        $empleados->ApellidoMaterno = $request->get('ApellidoMaterno');
        $empleados->Genero = $request->get('Genero');
        $empleados->Celular = $request->get('Celular');
        $empleados->Direccion = $request->get('Direccion');

        $empleados->save();
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.edit')->with('empleado',$empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);

        $empleado->Nombres = $request->get('Nombres');
        $empleado->ApellidoPaterno = $request->get('ApellidoPaterno');
        $empleado->ApellidoMaterno = $request->get('ApellidoMaterno');
        $empleado->Genero = $request->get('Genero');
        $empleado->Celular = $request->get('Celular');
        $empleado->Direccion = $request->get('Direccion');

        $empleado->save();
        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect('/empleados');
    }
}
