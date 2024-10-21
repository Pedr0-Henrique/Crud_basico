<?php

namespace App\Http\Controllers;

use App\Models\User; // Importação do modelo User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('produtos'); // Redirecionar para dashboard ou página desejada
        }

        return back()->withErrors([
            'email' => 'As credenciais informadas estão incorretas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home'); // Redirecionar para a página de login
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed', // Use 'confirmed' se você tiver um campo 'password_confirmation'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['remember_token'] = null; // Este campo pode ser deixado como null, pois será gerenciado pelo Laravel
        $validatedData['email_verified_at'] = null; // Defina como null inicialmente

        $user = User::create($validatedData);

        // Se você estiver usando verificação de e-mail, pode enviar um e-mail de verificação aqui

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso! Você pode fazer login.');
    }
}
