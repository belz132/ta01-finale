<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->char('nip',6);
            $table->bigInteger('jurusan_id')->unsigned();
            $table->string('nama');
            $table->string('mata_kuliah');
            $table->char('sks',1);            
            $table->timestamps();
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosens');
    }
}
