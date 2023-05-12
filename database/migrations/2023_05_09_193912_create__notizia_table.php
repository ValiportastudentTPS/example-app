<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*l'id potrebbe servire per distinguere*/
    public function up(): void
    {
        Schema::create('notizia', function (Blueprint $table) {
            $table->increments('idNotizia');
            $table->
            $table->string('url',100);
            
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notizia');
    }
};
