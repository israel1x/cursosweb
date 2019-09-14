<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index(Profesor $model)
    public function index()
    {
        return view('profesores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Profesor $model)
    {




        $date = Carbon::now();
        $profesor = new Profesor();

        $profesor->cedula           = $request->input('cedula');
        $profesor->nombres          = $request->input('nombres');
        $profesor->apellidos        = $request->input('apellidos');
        $profesor->fecha_nacimiento = $date;
        $profesor->titulo           = $request->input('titulo');
        $profesor->email            = $request->input('email');
        $profesor->direccion         = $request->input('direccion');
        $profesor->telf_convencional = $request->input('telf_convencional');
        $profesor->celular           = $request->input('celular');;
        //$curso->descripcion = $request->input('descripcion');
        //$curso->descripcion = $request->input('descripcion');

        $profesor->save();

        return redirect()->route('profesor.index')->withStatus(__('Profesor Creado Exitosamente.'));

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
        //
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
        //
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
