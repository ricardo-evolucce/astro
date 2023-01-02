<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaixasController extends Controller
{
    public function caixa()
    {
        return view('caixas.caixa');
    }

    public function update()
    {
            
        $user = request()->user();
        $attributes = request()->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
            'name' => 'required',
            'phone' => 'required|max:10',
            'about' => 'required:max:150',
            'location' => 'required'
        ]);

        auth()->user()->update($attributes);
        return back()->withStatus('Profile successfully updated.');
    
}
}
