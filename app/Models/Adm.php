<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Adm extends Authenticatable
{
    protected $table = 'adm';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'adm_id');
    }
}
