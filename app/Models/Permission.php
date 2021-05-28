<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'name' => 'array', // name je iz permissions table // skladistimo sve u name u json formatu
    ];

    public function role()
    {
    	return $this->belongsTo(Role::class);
    }
}
