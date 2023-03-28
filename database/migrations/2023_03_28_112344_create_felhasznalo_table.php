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
        Schema::create('felhasznalo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nev");
            $table->string("email");
            $table->timestamp("szuldatum");
            $table->string("jelszo");
            $table->string("iranyitoszam");
            $table->text("cim");
            $table->integer("hazszam");
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('felhasznalo');
    }
};
