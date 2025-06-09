<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cliente;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breed',
        'color',
        'gender',
        'birth_date',
        'weight',
        'client_id', // FK para Cliente
        'user_id',   // FK para Usuário
    ];

    // Pet pertence a um cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'client_id');
    }

    // Pet pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
