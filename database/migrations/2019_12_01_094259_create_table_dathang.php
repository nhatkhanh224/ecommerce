<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDathang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dathang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_nguoidung');
            $table->string('email');
            $table->string('sdt');
            $table->string('tinh_tp');
            $table->string('quan_huyen');
            $table->string('diachi');

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
        Schema::dropIfExists('dathang');
    }
}
