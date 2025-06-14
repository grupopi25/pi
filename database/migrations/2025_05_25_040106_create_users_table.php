<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // FK cliente_id nullable, se cliente deletar, seta null
            $table->foreignId('cliente_id')->nullable()->constrained('clientes')->onDelete('set null');

            $table->string('name');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('client_id')->nullable()->constrained('clientes')->onDelete('set null');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
