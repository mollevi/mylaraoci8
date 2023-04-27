<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHirdetesTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hirdetes', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->timestamps();
            $table->string("cim", 80);
            $table->text("tartalom");;
            $table->rememberToken();
        });
        DB::statement('CREATE SEQUENCE hirdetes_id_seq START WITH 1 INCREMENT BY 1 NOCACHE');
        DB::statement("CREATE OR REPLACE TRIGGER hirdetes_id_trigger
            BEFORE INSERT ON hirdetes
            FOR EACH ROW
            BEGIN
                SELECT hirdetes_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER hirdetes_id_trigger');
        DB::statement('DROP SEQUENCE hirdetes_id_seq');
        Schema::dropIfExists('hirdetes');
    }
};
