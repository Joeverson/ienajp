<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tel')->nullable();
            $table->string('cidade')->nullable();
            $table->boolean('encontro')->default(false)->nullable();
            $table->boolean('batismo')->default(false)->nullable();
            $table->boolean('ccc')->default(false)->nullable();
            $table->boolean('ctl')->default(false)->nullable();
            $table->boolean('casado')->default(false)->nullable();
            $table->boolean('dizimista')->default(false)->nullable();
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->integer('lider_id')->unsigned()->default(1);
            $table->foreign('lider_id')->references('id')->on('membros');
            $table->integer('supervisor_id')->unsigned()->default(1);
            $table->foreign('supervisor_id')->references('id')->on('membros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros');
    }
}
