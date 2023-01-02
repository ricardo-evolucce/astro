<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use App\Models\Cliente;
use App\Models\Animal;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $cliente, Animal $animal)
    {
       
        

        $validated = $request->validate([
            'data' => 'required|string|max:20',
            'status' => 'required|string|max:10',
            'tipoAtendimento' => 'required|string|max:15'            
        ]);

       

        $animal->atendimentos()->create($validated);

        return redirect(route('animals.show',[
            'animal' => $animal
        ]));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function show(Atendimento $atendimento)
    {
         
        return view('animals.showAtendimento', ['atendimento' => $atendimento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Atendimento $atendimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atendimento $atendimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atendimento  $atendimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atendimento $atendimento)
    {
        //
    }

   
}
