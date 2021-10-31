<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacao extends Migration
{
    /**
     * Run the migrations.
     *Criação da tabela publicação
     * @return void
     */
    public function up()
    {
        Schema::create('publicacao', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('data');
            $table->text('mensagem');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('publicacao');
    }
}
