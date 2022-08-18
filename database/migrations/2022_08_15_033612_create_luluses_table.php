<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLulusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luluses', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('keterangan');
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->on('siswas')->references('id')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('luluses');
    }
}
