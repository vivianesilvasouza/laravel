<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function rules()
    {
        return [
            'nome' => 'required|unique:categorias',
        ];
    }
}
