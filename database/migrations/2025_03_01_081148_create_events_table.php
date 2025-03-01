<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $database = Config::get('database.connections.mysql.database');

        // Criar o banco de dados se não existir
        DB::statement("CREATE DATABASE IF NOT EXISTS `$database`");
        DB::statement("USE `$database`");

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('tipo');
            $table->text('descricao')->nullable();
            $table->string('endereco');
            $table->string('link_endereco', 1000)->nullable(); // Alterado para 1000 caracteres
            $table->dateTime('data_hora');
            $table->decimal('preco', 10, 2)->nullable();
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
