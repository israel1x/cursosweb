<?php

namespace App\Http\Controllers;

use App\AreaConocimiento;
use Illuminate\Http\Request;

class AreaConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AreaConocimiento $modelArea)
    {
        return view('areaconocimiento.index', ['areaconocimientos' => $modelArea->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areaconocimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AreaConocimiento $modelArea)
    {
        $modelArea->create()->all();

        return redirect()->route('areaconocimiento.index')->withStatus(__('Areade Conocimiento Creada.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AreaConocimiento  $areaConocimiento
     * @return \Illuminate\Http\Response
     */
    public function show(AreaConocimiento $areaConocimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AreaConocimiento  $areaConocimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(AreaConocimiento $areaConocimiento)
    {
       // return view('areaconocimiento.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AreaConocimiento  $areaConocimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AreaConocimiento $areaConocimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AreaConocimiento  $areaConocimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(AreaConocimiento $areaConocimiento)
    {
        //
    }
}
