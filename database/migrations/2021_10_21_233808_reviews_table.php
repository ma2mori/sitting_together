<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReviewsTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::table('reviews', function (Blueprint $table) {
   $table->id();
   $table->string('shop_id');
   $table->string('user_id');
   $table->integer('stars')->default(3);
   $table->text('review');
   $table->timestamps();
   $table->softDeletes();

   $table->unique(['shop_id','user_id'],'unique_shop_id_user_id');

  });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
  Schema::dropIfExists('reviews');
 }
}
