<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegradoresTable extends Migration
{
    public function up()
    {
        Schema::create('integradores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('gestion');
            
        });
    }


    public function down()
    {
        Schema::dropIfExists('integradores');
    }
}
