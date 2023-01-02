<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('animals.index', [
            'animals' => Animal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cliente $cliente)
    {
       
        return view('animals.create', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $cliente)
    {
       


        $validated = $request->validate([
            'nome' => 'required|string|max:20',
            'especie' => 'required|string|max:1',
            'sexo' => 'required|string|max:1',
            'raca' => 'required|string|max:1'
        ]);

  
        $cliente->animals()->create($validated);
        //$animal = Animal::create($validated);
        
        return redirect(route('animals.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {

    

       return view('animals.show',[
        'animal' => $animal
       ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal, User $user)
    {
    
        
        $this->authorize('update', $animal);

        return view('animais.edit',[
            'animal' => $animal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $this->authorize('update', $animal);

        $validated = $request->validate([
            'nome' => 'required|string|max:100',
            'especie' => 'required|string|max:11',
            'sexo' => 'string|max:100',
            'raca' => 'string|max:50'
        ]);

        $animal->update($validated);

        return redirect(route('animais.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $this->authorize('delete', $animal);

        $animal->delete();

        return redirect(route('animais.index'));
    }


       /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function showAtendimento(Animal $animal, Atendimento $atendimento)
    {

    

       return view('animals.showAtendimento',[
        'animal' => $animal,
        'atendimento' => $atendimento
       ]);
    }


   


}
