<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateModositasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modositas', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->integer('admin_ID')->unsigned()->nullable(false);
            $table->foreign('admin_ID')->references('id')->on('admin');
            $table->text('szovege')->nullable(true);
            $table->timestamps();
        });
        DB::statement('CREATE SEQUENCE modositas_id_seq START WITH 1 INCREMENT BY 1 NOCACHE');
        DB::statement("CREATE OR REPLACE TRIGGER modositas_id_trigger
            BEFORE INSERT ON modositas
            FOR EACH ROW
            BEGIN
                SELECT modositas_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER modositas_id_trigger');
        DB::statement('DROP SEQUENCE modositas_id_seq');
        Schema::dropIfExists('modositas');
    }
};
