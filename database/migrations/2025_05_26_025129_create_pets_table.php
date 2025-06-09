<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();

            // Dados do Pet
            $table->string('name');
            $table->string('species'); // Ex: cão, gato, etc.
            $table->string('breed')->nullable();
            $table->string('color')->nullable();
            $table->string('gender')->nullable(); // macho/fêmea
            $table->date('birth_date')->nullable();
            $table->float('weight')->nullable();

            // Relações
           $table->foreignId('client_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
