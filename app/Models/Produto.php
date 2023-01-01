<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function rules()
    {
        return [
            'nome' => 'required|unique:produtos',
        ];
    }
}
