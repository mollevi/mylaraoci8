<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('ID')->unsigned()->primary();
            $table->string("nev",127)->nullable(false);
            $table->string("email",255)->nullable(false)->unique();
            $table->date("szuldatum")->nullable(false);
            $table->string("jelszohash",64)->nullable(false);
            $table->timestamps();
            $table->rememberToken();
        });
        DB::statement('CREATE SEQUENCE admin_id_seq START WITH 1 INCREMENT BY 1 NOCACHE');
        DB::statement("CREATE OR REPLACE TRIGGER admin_id_trigger
            BEFORE INSERT ON admin
            FOR EACH ROW
            BEGIN
                SELECT admin_id_seq.NEXTVAL INTO :new.ID FROM dual;
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER admin_id_trigger');
        DB::statement('DROP SEQUENCE admin_id_seq');
        Schema::dropIfExists('admin');
    }
};
