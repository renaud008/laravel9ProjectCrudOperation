<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeed extends Seeder
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

           

            Article::create([
                'title'=>$faker->sentence(),
                'subtitle'=>$faker->sentence(),
                'content'=>$faker->text($maxNbChars=150),
                'commentaire_id'=> Commentaire::inRandomOrder()->first()->id
                
            ]);
         }
      }
}
