<?php

namespace App\Models;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'commentaire_id'
    ];

    public function commentaire(){
        
        return $this->belongsTo(Commentaire::class);
        
    }

}
