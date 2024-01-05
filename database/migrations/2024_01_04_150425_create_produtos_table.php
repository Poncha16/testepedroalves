<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{


public function up()
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    Schema::create('produtos', function (Blueprint $table){
    $table->string ('codigo');
    $table->string ('nome');
    $table->string ('cat');
    $table->string ('preco');
    $table->string ('des');

    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(){
        $chema::drop('produtos');
    }
}
