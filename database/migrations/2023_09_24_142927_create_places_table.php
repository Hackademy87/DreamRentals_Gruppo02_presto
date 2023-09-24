<?php

use App\Models\Place;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        $places = [

        'Campania',
        'Lazio',
        'Toscana',
        'Puglia',
        'Calabria',
        'Sicilia',
        'Liguria',
        'Abruzzo'
        ];


        foreach($places as $place){
            Place::create([
           'name'=> $place
            ]);

      };

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
