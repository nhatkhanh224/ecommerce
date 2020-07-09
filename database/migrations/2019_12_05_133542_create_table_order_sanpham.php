<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_dathang');
            $table->integer('id_nguoidung');
            $table->integer('id_sanpham');
            $table->string('ma_sanpham');
            $table->string('ten_sanpham');
            $table->string('size');
            $table->string('gia');
            $table->string('soluong');

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
        Schema::dropIfExists('order_sanpham');
    }
}
