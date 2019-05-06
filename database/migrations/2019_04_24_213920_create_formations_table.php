<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nom')->default('pas de nom donné ');
          $table->string('thematique')->default('pas de thematique donné ');
          $table->string('formateur')->default('pas de formateur donné ');
          $table->string('code')->default('pas de code donné ');
          $table->string('duree')->default('pas de duree donné ');
          $table->string('fiche_tech')->default('pas de fiche_tech donné ');
          $table->string('cible_public')->default('pas de cible_public donné ');
          $table->string('image')  ;
          $table->string('programme')->default('pas de programme donné ');
          $table->integer('status');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
