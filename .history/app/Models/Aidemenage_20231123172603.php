<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Aidemenage extends Model
{
    use HasFactory;

    /**
     * @var string[]
     *
     * @psalm-var list{'id', 'nom', 'prenom', 'date_de_naissance', 'quartier'}
     */
    protected array $fillable = [ 
        'id',   
        'nom',
        'prenom',
        'date_de_naissance',
        'quartier',
    ];
}
