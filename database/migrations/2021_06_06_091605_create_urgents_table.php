<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urgents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dosen_id')->unsigned();
            $table->string('nama_kontak');
            $table->string('hubungan_kontak');
            $table->bigInteger('telepon_kontak');
            $table->string('email_kontak');
            $table->timestamps();
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urgents');
    }
}
