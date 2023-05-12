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
            $table->string('url',500);
            $table->string('categoria',100);
            $table->string('formato',100);
            $table->string('fonte',100);
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
