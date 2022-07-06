<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta_parcelas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('conta_id')->unsigned()->nullable();
            $table->foreign('conta_id')->references('id')->on('contas');
            $table->bigInteger('parcela_id')->unsigned()->nullable();
            $table->foreign('parcela_id')->references('id')->on('parcelas');
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
        Schema::dropIfExists('conta_parcelas');
    }
};
