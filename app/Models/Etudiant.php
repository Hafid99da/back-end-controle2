<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected $table = 'etudiants';
    protected $primarykey = 'id';

    protected $fillable = [
        "nom",
        "adresse",
        "telephone",
        "image"
    ];
}
