<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
           
            $table->string('id');
            $table->string('matricule',20);
            $table->string('cin',20);
            $table->string('last_name',30);
            $table->string('first_name',30);
            $table->boolean('sexe');  
            $table->string('email',50);  
            $table->string('cellphone',20);  
            $table->text('picture',30);  
            $table->binary('photo');  
            $table->string('arabic_first_name',30);  
            $table->string('arabic_last_name',30);  
            $table->tinyInteger('active',30);  
            $table->date('picture_date');  
            $table->boolean('complet',30);  
            $table->string('type',36);  
            $table->text('decrypte_info');  
            $table->timestamp('validated_at');  
            $table->unsignedInteger('validator_id');  
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
};
