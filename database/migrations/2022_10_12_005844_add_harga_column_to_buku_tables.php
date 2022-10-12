<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Buku', function (Blueprint $table) {
        $table->after('penerbit', function (Blueprint $table){
            $table->integer('harga');
        }); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buku_tables', function (Blueprint $table) {
            //
        });
    }
};
