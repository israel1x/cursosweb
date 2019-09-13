<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {

        return view('users.index', ['users' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        //$data = $request->all();
       // dd($request);
/*
        request()->validate([
            'name'     => 'required|min:3|max:20',
            'lastname' => 'required|min:3|max:20',
            'tipoPerfil_id' => 'required|integer',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|max:20|same:password',
        ], [
            'name.required' => 'El Nombre es requerido',
            'name.min' => 'El nombre must be at least 2 characters.',
            'name.max' => 'El nombre should not be greater than 50 characters.',
            'tipoPerfil_id' => 'El tipo de Perfil es necesario',
            'email.required' => 'El email es necesario'
        ]);*/


        $model->create($request->merge(['password' => Hash::make($request->get('password')),
            'IdUsuarioCreacion' => 2,
            'IdUsuarioModificacion' => 2,
            'fechaCreacion' => '2019-09-08 21:51:20',
            'fechaModificacion' => '2019-09-08 21:51:20'
        ] )->all());

        return redirect()->route('user.index')->withStatus(__('Usuario Creado Exitosamente.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));

        return redirect()->route('user.index')->withStatus(__('Se Guardaron los cambios del usuario.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User  $user)
    {
        $user->delete();

        return redirect()->route('user.index')->withStatus(__('Usuario Borrado.'));
    }
}
