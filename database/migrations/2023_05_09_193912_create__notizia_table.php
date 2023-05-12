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
        Schema::create('_notizie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url',100);
            
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_notizie');
    }
};
