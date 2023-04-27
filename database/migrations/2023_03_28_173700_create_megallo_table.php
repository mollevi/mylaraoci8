<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMegalloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('megallo', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->string('TELEPULES')->nullable(false);
            $table->string('NEV')->nullable(false);
            $table->decimal('KILOMETER', 8, 2)->nullable(false);
            $table->dateTime('IDOPONT')->nullable(false);
            $table->integer('JARAT_ID')->unsigned()->nullable(false);
            $table->foreign('JARAT_ID')->references('id')->on('JARAT')->onDelete('cascade');
            $table->integer('SORSZAM')->unsigned()->nullable(false);
        });
        DB::unprepared('ALTER TABLE megallo ADD CONSTRAINT megallo_sorszam_jarat_id_unique UNIQUE (SORSZAM, JARAT_ID)');
        DB::statement('CREATE SEQUENCE megallo_id_seq START WITH 1 INCREMENT BY 1 NOCACHE');
        DB::statement("CREATE OR REPLACE TRIGGER megallo_id_trigger
            BEFORE INSERT ON megallo
            FOR EACH ROW
            BEGIN
                SELECT megallo_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
        DB::unprepared(file_get_contents("check_megallo_values.sql"));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER megallo_id_trigger');
        DB::statement('DROP SEQUENCE megallo_id_seq');
        Schema::dropIfExists('megallo');
    }
}
