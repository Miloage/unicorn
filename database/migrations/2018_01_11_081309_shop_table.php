<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('host')->index();
            $table->string('name', 64);
            $table->timestamps();
        });

        Schema::create('official_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id');
            $table->string('name', 64);
            $table->string('wx_name', 64);
            $table->string('origin_id', 64);
            $table->string('app_id', 64);
            $table->string('app_secret', 64);
            $table->integer('type')->comment('1:服务号 2：订阅号 3：小程序');
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
        Schema::dropIfExists('shops');
        Schema::dropIfExists('official_accounts');
    }
}
