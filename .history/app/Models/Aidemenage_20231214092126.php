<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AideMenage extends Model
{
    use HasFactory;

    protected $table = 'aide_menage';
    public $timestamps = true;

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

    public function foyer()
{
    return $this->belongsTo(Foyer::class);
}

}
