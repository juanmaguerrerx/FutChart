<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pistas extends Model
{
    use HasFactory;
    public function getNombre($id)
    {
        return Pistas::where('id', $id)->value('nombre');
    }
}
