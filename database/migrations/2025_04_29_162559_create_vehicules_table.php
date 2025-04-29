<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique(); // ex: LT1234AB
            $table->string('marque');              // ex: Toyota, Mercedes
            $table->string('modele')->nullable();  // ex: Coaster, Sprinter
            $table->integer('capacite');           // nombre de places
            $table->string('type')->nullable();    // ex: bus, minibus
            $table->foreignId('argence_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
