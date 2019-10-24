<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Macronutriente;

class MacronutrienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $macronutrientes = Macronutriente::get();
        $data = [
            'macronutrientes' => $macronutrientes
        ];

        return view('macronutrientes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('macronutrientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $macronutriente = new Macronutriente();
        $macronutriente->nombre = $request->nombre;
        $macronutriente->peso = $request->peso;
        $macronutriente->calorias = $request->calorias;
        $macronutriente->proteinas = $request->proteinas;
        $macronutriente->carbohidratos = $request->carbohidratos;
        $macronutriente->grasas = $request->grasas;
        $macronutriente->save();
        return redirect('macronutrientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $macronutriente = Macronutriente::find($id);
        $data = [
            'macronutriente' => $macronutriente
        ];
        return view('macronutrientes.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $macronutriente = Macronutriente::find($id);
        $data = [
            'macronutriente' => $macronutriente
        ];
        return view('macronutrientes.edit', $data);
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
        $macronutriente = Macronutriente::find($id);
        $macronutriente->nombre = $request->nombre;
        $macronutriente->peso = $request->peso;
        $macronutriente->calorias = $request->calorias;
        $macronutriente->proteinas = $request->proteinas;
        $macronutriente->carbohidratos = $request->carbohidratos;
        $macronutriente->grasas = $request->grasas;
        $macronutriente->save();
        return redirect('macronutrientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
