<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moradia extends Model
{
    use HasFactory;

    protected $fillable = [
        'rua',
        'bairro',
        'cep',
        'complemento',
        'estado',
        'pessoa_id'
    ];

    public function pessoas()
    {
        return $this->belongsTo('App\Models\moradia', 'pessoa_id');
    }
}
