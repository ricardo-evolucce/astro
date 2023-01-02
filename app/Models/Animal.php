<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    

    protected $fillable = ['nome', 'sexo', 'especie', 'raca', 'cliente_id'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function atendimentos(){
        return $this->hasMany(Atendimento::class);
    }




}
