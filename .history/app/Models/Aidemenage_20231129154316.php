<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aidemenage extends Model
{
    use HasFactory;

    protected $table = 'aidemenage';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'date_de_naissance',
        'quartier',
    ];

    /**
     * Indicates if the model should be incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
