<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Si un table est au pluriel, écrire son modèle au singulier
    protected $table = "categories";
    //
    protected $primaryKey = 'idCategories';
    //le modèle n'aura pas les entrées de la table
    public $timestamps = false;

    protected $fillable = ['label'];
}
