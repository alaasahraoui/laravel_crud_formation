<?php

use Illuminate\Database\Seeder;
use Faker\Factory as F;
class FormationTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

$faker=F::create('App\Formation');

for ($i=0; $i <20 ; $i++) {
  DB::table('formations')->insert([

             'nom' =>  $faker->realText($maxNbChars =10, $indexSize = 2),

             'thematique' =>$faker->sentence($nbWords = 3, $variableNbWords = true),
             'formateur' => $faker->name,
             'code' => Str::random(10),
             'duree' =>$faker->randomDigit .'j',
             'fiche_tech' => $faker->sentence($nbWords = 1, $variableNbWords = true),
             'cible_public' =>$faker->jobTitle,
             'image' =>$faker->imageUrl($width = 640, $height = 480),

             'programme' =>  $faker->realText($maxNbChars =100, $indexSize = 2),
             'status' =>  $faker->randomDigit


         ]);
}



    }
}
