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
        Schema::create('Buku', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->bigInteger('isbn');
            $table->integer('THterbit');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
