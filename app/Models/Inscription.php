<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscriptions';
    protected $primarykey = 'id';

    protected $fillable = [
        "inscpt_code",
        "cour_id",
        "etudiant_id",
        "date_inscrit",
        "montant"
    ];

    public function montant()
    {
        return $this->montant. " DH";
    }

    public function cour() 
    {
        return $this->belongsTo(Cour::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}