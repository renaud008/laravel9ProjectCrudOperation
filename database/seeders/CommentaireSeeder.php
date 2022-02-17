<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $faker = Factory::create(); 

        for($i=0; $i<26; $i++){

            Commentaire::create([
                'title'=>$faker->sentence(), 
                'content'=>$faker->text($maxNbChars=80),
                'article_id'=> Article::inRandomOrder()->first()->id
                
            ]);
    }
    }
}
