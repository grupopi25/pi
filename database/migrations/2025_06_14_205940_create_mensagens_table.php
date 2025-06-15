<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();


            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');


            $table->foreignId('adm_id')->nullable()->constrained('adm')->onDelete('cascade');

            $table->text('conteudo');


            $table->enum('remetente', ['adm', 'cliente']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mensagens');
    }
};
