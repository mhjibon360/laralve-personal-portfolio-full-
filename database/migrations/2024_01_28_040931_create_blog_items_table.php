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
    Schema::create('blog_items', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id')->nullable();
      $table->integer('category_id')->nullable();
      $table->string('title')->nullable();
      $table->string('slug')->nullable();
      $table->string('view')->default('0');
      $table->mediumText('tags')->nullable();
      $table->longText('details')->nullable();
      $table->string('image')->nullable();
      $table->integer('status')->default('1');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('blog_items');
  }
};
