<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker_personal extends Model
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

        'date_expiration_cin',
        'birthday',
        'birth_city_id',
        'address',
        'cellphone2',
        'fixphone',
        'passport',
        'arabic_address',
        'second_address',
        'cimr',
        'residence_permit',
        'residence_permit_experation_date',
        'children',
        
    ];
}
