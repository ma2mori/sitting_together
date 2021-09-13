<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShopTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('shop', function (Blueprint $table) {
   $table->id();
   $table->string('shop_id');
   $table->string('code');
   $table->integer('area_id');
   $table->string('area');
   $table->string('name');
   $table->string('url');
   $table->string('tel');
   $table->string('access');
   $table->string('business_hours');
   $table->string('mens_charge');
   $table->string('price_weekdays_per10m');
   $table->string('price_holiday_per10m');
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
  Schema::dropIfExists('shop');
 }
}
