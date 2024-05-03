<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;

    protected $table = 'cours';
    protected $primarykey = 'id';

    protected $fillable = [
        "nom",
        "programme",
        "duration"
    ];

    public function duration()
    {
        return $this->duration . " Mois";
    }
}
