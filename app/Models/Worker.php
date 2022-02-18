<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'matricule',
        'cin',
        'first_name',
        'last_name',
        'sexe',
        'email',
        'cellphone',
        'picture',
        'photo',
        'arabic_first_name',
        'arabic_last_name',
        'active',
        'picture_date',
        'complet',
        'type',
        'decrypte_info',
        
    ];

}
