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
        Schema::create('modosit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("jegy_id");
            $table->integer("admin_id");
            $table->string("szoveg");
            $table->date("erkezesi_ido");
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
        Schema::dropIfExists('modosit');
    }
};
