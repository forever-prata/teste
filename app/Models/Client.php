<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $casts = [
        'habilidades' => 'array',
        'date' => 'datetime'
    ];

    protected $guarded = [];

    protected $dates = ['date'];
}
