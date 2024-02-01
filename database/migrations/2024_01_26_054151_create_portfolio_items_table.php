<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('portfolio_items', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id')->nullable();
      $table->integer('port_cat_id')->nullable();
      $table->string('title')->nullable();
      $table->string('slug')->nullable();
      $table->longText('details')->nullable();
      $table->mediumText('image')->nullable();
      $table->integer('status')->default('1');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('portfolio_items');
  }
};
