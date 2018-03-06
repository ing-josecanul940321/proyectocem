<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{

    protected $fillable = ['titulo_noticia','cuerpo_noticia','img_noticia'];
}
