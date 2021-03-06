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
        Schema::create('bedrijven', function (Blueprint $table) {
            $table->id();
            $table->string('bedrijfnaam');
            $table->integer('postcode');
            $table->string('branche');
            $table->integer('werknemers');
            $table->integer('gebouwen');
            $table->integer('grondoppervlak');
            $table->integer('bouwoppervlak');
            $table->date('updated_at');
            $table->date('created_at');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bedrijven');
    }
};
