<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'dashboard';

    protected $primaryKey = "id";

    protected $fillable = [
       'nome', 'url_img', 'permissao'
    ];


    public $timestamps = false;


}