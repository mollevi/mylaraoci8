<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateJegyTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jegy', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->integer('ar')->nullable(false);
            $table->string('tipus')->nullable(false);
            $table->decimal('tavolsag', 8, 2)->nullable(false);
            $table->integer('felhasznalo_id')->unsigned()->nullable(false);
            $table->foreign('felhasznalo_id')->references('id')->on('JARAT')->onDelete('cascade');
        });
        DB::statement('CREATE SEQUENCE jegy_id_seq START WITH 1 INCREMENT BY 1 NOCACHE');
        DB::statement("CREATE OR REPLACE TRIGGER jegy_id_trigger
            BEFORE INSERT ON jegy
            FOR EACH ROW
            BEGIN
                SELECT jegy_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER jegy_id_trigger');
        DB::statement('DROP SEQUENCE jegy_id_seq');
        Schema::dropIfExists('jegy');
    }
};
