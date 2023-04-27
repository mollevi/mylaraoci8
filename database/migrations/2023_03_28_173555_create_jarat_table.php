<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateJaratTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jarat', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->string('tipus')->nullable(false);
            $table->string('megnevezes')->nullable(false);
            $table->string('leiras')->nullable(false);
            $table->date('datum')->nullable(false);
        });
        DB::statement('CREATE SEQUENCE jarat_id_seq START WITH 1 INCREMENT BY 1 NOCACHE');
        DB::statement("CREATE OR REPLACE TRIGGER jarat_id_trigger
            BEFORE INSERT ON jarat
            FOR EACH ROW
            BEGIN
                SELECT jarat_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER jarat_id_trigger');
        DB::statement('DROP SEQUENCE jarat_id_seq');
        Schema::dropIfExists('jarat');
    }
};
