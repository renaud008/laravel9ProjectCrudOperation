<?php

namespace App\Models;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
  
    protected $fillable = [
        'title',
        'subtitle',
        'content'
        
    ];
    public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function commentaires(){
        
        return $this->hasMany(Commentaire::class);
       
        
    }

}
