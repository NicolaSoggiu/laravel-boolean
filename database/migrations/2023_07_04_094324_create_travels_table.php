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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            // $table->timestamps();

            $table->date('date');           // Il ricordo testuale dell'Esperienza
            $table->string('title', 50);    // Il titolo dell'Esperienza
            $table->text('text');           // Il ricordo testuale dell'Esperienza
            $table->text('description')->nullable(); 
            $table->text('image')->nullable();          // Un'immagine associata all'Esperienza
            $table->text('image_1')->nullable();        
            $table->text('image_2')->nullable();        
            $table->text('image_3')->nullable();        
            $table->text('image_4')->nullable();        
            $table->string('country', 25);  // La nazione in cui è avvenuta l'Esperienza
            $table->string('city', 50);     // L'indirizzo presso cui è avvenuta l'Esperienza
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
};