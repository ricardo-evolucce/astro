<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'status', 'tipoAtendimento', 'cliente_id'];

    protected $dates = ['data'];

 

    public function animal(){
        return $this->belongsTo(Animal::class);
    }
}
