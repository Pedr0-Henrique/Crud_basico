<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
   
  public function index()
{
    $usuarios = User::all(); 
    return view('usuarios.index', compact('usuarios')); 
}


    public function create()
    {
        return view('usuarios.create');
    }


    public function store(Request $request)
    {
     
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'email_confirmation' => 'required|same:email',
            'password' => 'required|string|min:8|confirmed',
        ]);

      
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
          
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso.');
    }


    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }


    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }


    public function update(Request $request, $id)
    {
   
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'email_confirmation' => 'required|same:email',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    

        $usuario = User::findOrFail($id);
    
  
        $usuario->name = $validatedData['name'];
        $usuario->email = $validatedData['email'];
    
 
        if ($request->has('email_verified_at')) {
            $usuario->email_verified_at = now();
        } else {
            $usuario->email_verified_at = null;
        }
    
    
        if (!empty($validatedData['password'])) {
            $usuario->password = Hash::make($validatedData['password']);
        }
    
     
        $usuario->save();
    
        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso.');
    }
    


    public function delete($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.delete', compact('usuario'));
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso.');
    }
}
