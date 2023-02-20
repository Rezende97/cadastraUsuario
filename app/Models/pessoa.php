<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\moradia;

class pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'documento',
        'rg',
        'data_nascimento',
        'est_civil',
        'telefone',
    ];

    public function moradias()
    {
        return $this->hasMany('App\Models\moradia', 'pessoa_id');
    }
}
