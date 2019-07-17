<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->bigIncrements('id');//予約番号
            $table->string('product number')->nullable();//商品番号
            $table->string('users_number')->nullable(); //お客様番号
            $table->string('quantity'); //個数
            $table->string('menu_id'); //商品の処理番号
            //追加
            $table->string('item');
            $table->string('price');
            $table->string('description');
        
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
        Schema::dropIfExists('reserves');
    }
}
