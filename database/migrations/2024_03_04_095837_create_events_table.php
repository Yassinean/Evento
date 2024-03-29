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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('localisation');
            $table->text('description');
            $table->string('image');
            $table->date('date');
            $table->integer('capacity');
            $table->boolean('status')->default(false);
            $table->enum('acceptation' , ['automatique' , 'manuel']);
            $table->foreignId('categorie_id')->nullable()->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('organisateur_id')->constrained('organisateurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};