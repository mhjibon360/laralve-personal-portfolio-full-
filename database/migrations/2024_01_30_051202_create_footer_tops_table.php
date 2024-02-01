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
    Schema::create('footer_tops', function (Blueprint $table) {
      $table->id();
      $table->string('logo')->nullable();
      $table->mediumText('short_details')->nullable();
      $table->string('facebook_icon')->nullable();
      $table->mediumText('facebook_link')->nullable();
      $table->string('instagram_icon')->nullable();
      $table->mediumText('instagram_link')->nullable();
      $table->string('twitter_icon')->nullable();
      $table->mediumText('twitter_link')->nullable();
      $table->string('behance_icon')->nullable();
      $table->mediumText('behance_link')->nullable();

      $table->string('userful_title')->nullable();
      $table->string('portfolio_title')->nullable();
      $table->string('blog_title')->nullable();

      $table->string('contact_info_title')->nullable();
      $table->string('contact_info_address')->nullable();
      $table->string('contact_info_number')->nullable();
      $table->string('contact_info_email')->nullable();

      $table->string('helop_info_title')->nullable();
      $table->string('login')->nullable();
      $table->string('register')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('footer_tops');
  }
};
