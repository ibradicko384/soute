<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foyer extends Model
{
    use HasFactory;

    /**
     * @var string[]
     *
     * @psalm-var list{'id', 'nom', 'prenom', 'quartier'}
     */
    protected array $fillable = [ 
        'nom',
        'prenom',
        'quartier',
    ];
}
