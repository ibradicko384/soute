<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aidemenage extends Model
{
    use HasFactory;

    protected $table = 'aidemenage';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'date_de_naissance',
        'quartier',
    ];
}

