<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    
    protected $table = 'enseignants';
    protected $primarykey = 'id';

    protected $fillable = [
        "nom",
        "adresse",
        "telephone"
    ];
}
