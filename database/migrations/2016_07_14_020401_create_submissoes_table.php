<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatesubmissoesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissoes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Titulo');
            $table->text('atuacao');
            $table->text('Resumo');
            $table->text('Artigo');
            $table->text('url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('submissoes');
    }
}
