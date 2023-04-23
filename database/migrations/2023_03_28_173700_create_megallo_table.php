<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('megallo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nev");
            $table->integer("kilometer");
            $table->integer("vonat_id")->constrained("vonat");
            $table->integer("tavolsagi_buszok_id")->constrained("tavolsagi_buszok");
            $table->integer("helyi_buszok_id")->constrained("helyi_buszok");
            $table->date("indulasi_ido");
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
        Schema::dropIfExists('megallo');
    }
};
