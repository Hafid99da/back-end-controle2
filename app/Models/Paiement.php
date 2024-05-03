<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'paiements';
    protected $primarykey = 'id';

    protected $fillable = [
        "inscription_id",
        "date_paiement",
        "montant"
    ];

    public function montant()
    {
        return $this->montant. " DH";
    }

    public function inscription() 
    {
        return $this->belongsTo(Inscription::class);
    }
}