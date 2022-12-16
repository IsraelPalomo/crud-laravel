<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['employes']=Empleado::paginate(5);
        return view('employes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');
        if($request->hasFile('Image')){
            $datosEmpleado['Image'] = $request->file('Image')->store('uploads', 'public');
        }
        Empleado::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $employe=Empleado::findOrFail($id);
        return view('employes.edit', compact('employe')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosEmpleado = request()->except('_token','_method');

        if($request->hasFile('Image')){
            $employe = Empleado::findOrFail($id);
            Storage::delete('public/' . $employe->Image);
            $datosEmpleado['Image'] = $request->file('Image')->store('uploads', 'public');
        }

        Empleado::where('id','=',$id)->update($datosEmpleado);

         
        return redirect('employe'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('employe');
    }
}
