<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable =['titre' , 'contenue' , 'fichier' , 'daterealisation'];
}
