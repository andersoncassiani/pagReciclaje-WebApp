<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:30'],
            'apellido' => ['required', 'string', 'max:30'],
            'nombre_usuario' => ['required', 'string', 'max:20', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation'=>['required'],
        ]);

        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'nombre_usuario' => $request->nombre_usuario,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmation' => $request->password_confirmation,

        ]);

        event(new Registered($user));

        return back()->with('success', 'Usted se ha registrado satisfactoriamente! Ya puede iniciar session.');
    }
}
