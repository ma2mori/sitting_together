<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RatesTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('rates', function (Blueprint $table) {
   $table->id();
   $table->string('shop_id');
   $table->string('code');
   $table->integer('mens');
   $table->integer('womens');
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
  Schema::dropIfExists('rates');
 }
}
