<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateArazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arazas', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->integer('egysegar')->nullable(false);
            $table->string('tipus')->nullable(false);
            $table->timestamps();
        });
        DB::statement('CREATE SEQUENCE arazas_id_seq START WITH 1 INCREMENT BY 1 NOCACHE');
        DB::statement("
            CREATE OR REPLACE TRIGGER arazas_id_trigger
            BEFORE INSERT ON arazas
            FOR EACH ROW
            BEGIN
                SELECT arazas_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER arazas_id_trigger');
        DB::statement('DROP SEQUENCE arazas_id_seq');
        Schema::dropIfExists('arazas');
    }
}
