<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('clientes.index');

        return view('clientes.index', [
            'clientes' => Cliente::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:100',
            'cpf' => 'required|string|max:11',
            'email' => 'string|max:100',
            'telefone' => 'string|max:50'
        ]);

        $cliente = Cliente::create($validated);

        

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
              
        

        return view('clientes.show',[
            'cliente' => $cliente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente, User $user)
    {
        
        
        $this->authorize('update', $cliente);

        return view('clientes.edit',[
            'cliente' => $cliente
        ]);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        

        $this->authorize('update', $cliente);

        $validated = $request->validate([
            'nome' => 'required|string|max:100',
            'cpf' => 'required|string|max:11',
            'email' => 'string|max:100',
            'telefone' => 'string|max:50'
        ]);

        $cliente->update($validated);

        return redirect(route('clientes.index'));
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $this->authorize('delete', $cliente);

        $cliente->delete();

        return redirect(route('clientes.index'));
    }







}
