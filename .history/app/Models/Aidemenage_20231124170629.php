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
        'nom',
        'prenom',
        'date_de_naissance',
        'quartier',
    ];
    protected static function boot()
{
    parent::boot();

    static::creating(function ($model) {
        \Log::info('Creating Aidemenage', ['data' => $model->getAttributes()]);
    });

    static::created(function ($model) {
        \Log::info('Aidemenage created', ['data' => $model->getAttributes()]);
    });
}

}

