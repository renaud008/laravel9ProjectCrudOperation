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
        Schema::create('worker_professionnals', function (Blueprint $table) {
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
 
            $table->date('date_of_hire'); 
            $table->string('cnss',30); 
            $table->string('driving_license',30); 
            $table->string('bank_account',30);  
            $table->string('mutuelle',30);  
            $table->unsignedInteger('number_deduction'); 
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker_professionnals');
    }
};
