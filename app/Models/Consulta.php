<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [
        'pet_id',
        'client_id',
        'data',
        'hora',
        'motivo',
        'observacoes',
        'user_id',
    ];


    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }


    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'client_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
