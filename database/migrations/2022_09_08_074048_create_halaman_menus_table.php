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
        Schema::create('halaman_menu', function (Blueprint $table) {
            $table->id();
            $table->string("judul")->nullable();
            $table->string("isi")->nullable();
            $table->boolean("file")->nullable();
            $table->integer("link")->nullable();
            $table->integer("gambar")->nullable();
            $table->foreignId("menu_id")->nullable()->constrained("menu")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('halaman_menu');
    }
};
