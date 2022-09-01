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
        Schema::create('profil_website', function (Blueprint $table) {
            $table->id();
            $table->string("nama_website")->nullable();
            $table->text("email")->nullable();
            $table->text("domain")->nullable();
            $table->string("no_rekening")->nullable();
            $table->string("no_telp")->nullable();
            $table->string("meta_deskripsi")->nullable();
            $table->text("meta_keyword")->nullable();
            $table->text("google_maps")->nullable();
            $table->string("favicon")->nullable();
            $table->string("background_website")->nullable();
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
        Schema::dropIfExists('profil_website');
    }
};
