<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Yajra\Pdo\Oci8\Exceptions\Oci8Exception;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        try{
            DB::beginTransaction();
            $this->call( [
                AdminSeeder::class,
                FelhasznaloSeeder::class,
                HirdetesSeeder::class,
                JaratMegalloSeeder::class,
            ] );
            DB::commit();
        }catch(Oci8Exception $e){
            echo $e->getMessage();
            DB::rollBack();
        }
    }
}
