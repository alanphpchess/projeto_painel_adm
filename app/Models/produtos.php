<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $primaryKey = "id";

    

    protected $fillable = [
        'categoria', 'categoria_id', 'img_id', 'url_img', 'img_id',  'subtitulo', 'tipo',  'tipo_id',  'titulo', 'descricao','altura',
        'largura','profundidade', 'peso_proximado'

    ];


    public $timestamps = true;

    function produtos_img(){
        return $this->hasMany(produtos_img::class, 'id_produto', 'id');
    }
}