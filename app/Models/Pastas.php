<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pastas extends Model
{
    use HasFactory;

    protected $table = 'pastas';

    protected $primaryKey = "id";

    protected $fillable = [
        'id_categoria', 'nome','url', 'id_pasta'
    ];


    public $timestamps = false;
}