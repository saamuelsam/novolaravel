<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [ //mass assingment. //aceito receber um arrar delas
        'subject',
        'body',
        'status',
    ];
}
