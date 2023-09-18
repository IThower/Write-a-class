<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function perfil()
    {
        $user = Auth::user();
        return view('perfil.perfil', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('perfil.edit', compact('user'));
    }
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'specialty' => 'nullable|string',
            'social_links' => 'nullable|array',
            'phone_number' => 'nullable|string',
            'address' => 'nullable|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $socialLinks = $request->input('social_links', []);

        // Verifica se uma nova imagem foi enviada
        if ($request->hasFile('image')) {
            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('users'), $image_name);
            $path = "/users/" . $image_name;
            $user->image = $path;
        } else {
            // Se nenhuma nova imagem foi enviada, mantenha a imagem existente
            $path = $user->image;
        }

        $user->fill([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'specialty' => $request->input('specialty'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'social_links' => $socialLinks,
            // Basta atribuir o array diretamente
            'image' => $path,

        ]);

        $user->image = $path;

        if ($user->save()) {
            // Atualização bem-sucedida
            info('Perfil atualizado com sucesso: ' . $user->id);
            return redirect()->route('perfil')->with('success', 'Perfil atualizado com sucesso.');
        } else {
            // Atualização falhou
            info('Falha ao atualizar perfil: ' . $user->id);
            return redirect()->route('perfil')->with('error', 'Falha ao atualizar o perfil.');
        }
    }
}