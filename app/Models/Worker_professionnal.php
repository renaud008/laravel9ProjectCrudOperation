<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker_professionnal extends Model
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

        'date_of_hire',
        'cnss',
        'driving_license',
        'bank_account',
        'mutuelle',
        'number_deduction',

        
    ];


}
