<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();

        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
       // $curso->id = 7;
        $curso->descripcion      = $request->input('descripcion');
        $curso->descripcionlarga = $request->input('descripcionlarga');
        $curso->prerequisito     = $request->input('prerequisito');
        $curso->objetivos        = $request->input('objetivos');
        $curso->estado           = $request->input('estado');
        $curso->areaconocimiento_id = $request->input('areaconocimiento_id');
        $curso->IdUsuarioCreacion = 1;
        $curso->IdUsuarioModificacion = 1;
        //$curso->descripcion = $request->input('descripcion');
        //$curso->descripcion = $request->input('descripcion');

        $curso->save();

        return redirect()->route('curso.index')->withStatus(__('Curso Creado.'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function showniveles()
    {
        return view('cursos.niveles');
    }
}
