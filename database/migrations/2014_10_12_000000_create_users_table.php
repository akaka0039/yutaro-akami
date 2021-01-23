<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->bigIncrements('id');
      // 「unique」ユニーク制約とは、このテーブル内で他のレコードと同じ値を重複させないという制約
      $table->string('name')->unique();
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password')->nullable();
      $table->rememberToken();
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
    Schema::dropIfExists('users');
  }
}
