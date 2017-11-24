<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //Si un table est au pluriel, écrire son modèle au singulier
    protected $table = "categories";
    //
    protected $primaryKey = 'idCategory';

    //le modèle n'aura pas les entrées de la table
    public $timestamps = false;

    protected $fillable = ['labelCategory'];
}
