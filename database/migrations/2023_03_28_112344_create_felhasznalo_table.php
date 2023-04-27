<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFelhasznaloTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felhasznalo', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->string("nev",255)->nullable(false);
            $table->string("email",255)->nullable(false)->unique();
            $table->date("szuldatum")->nullable(false);
            $table->string("jelszohash",63)->nullable(false);
            $table->text("lakcim")->nullable(false);
            $table->timestamps();
            $table->rememberToken();
        });
        DB::statement('CREATE SEQUENCE felhasznalo_id_seq START WITH 1 INCREMENT BY 1');
        DB::statement("CREATE OR REPLACE TRIGGER felhasznalo_id_trigger
            BEFORE INSERT ON felhasznalo
                FOR EACH ROW
            BEGIN
                SELECT felhasznalo_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER felhasznalo_id_trigger');
        DB::statement('DROP SEQUENCE felhasznalo_id_seq');
        Schema::dropIfExists('felhasznalo');
    }
};
