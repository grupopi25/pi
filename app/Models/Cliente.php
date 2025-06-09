<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'cliente_id');
    }

    public function pets()
    {
        return $this->hasMany(Pet::class, 'client_id');
    }
}
