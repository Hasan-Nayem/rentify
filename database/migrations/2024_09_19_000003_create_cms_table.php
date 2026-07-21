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
        Schema::create('c_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('section');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('btn1')->nullable();
            $table->string('btn2')->nullable();
            $table->string('header')->nullable();
            $table->text('bg_image')->nullable();
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->json('list')->nullable();

            $table->string('sub_title_one')->nullable();
            $table->text('sub_des_one')->nullable();
            $table->text('sub_image_one')->nullable();
            $table->string('sub_header_one')->nullable();
            $table->json('sub_list_one')->nullable();

            $table->string('sub_title_two')->nullable();
            $table->text('sub_des_two')->nullable();
            $table->text('sub_image_two')->nullable();
            $table->string('sub_header_two')->nullable();
            $table->json('sub_list_two')->nullable();

            $table->string('sub_title_three')->nullable();
            $table->text('sub_des_three')->nullable();
            $table->text('sub_image_three')->nullable();
            $table->string('sub_header_three')->nullable();
            $table->json('sub_list_three')->nullable();

            $table->string('sub_title_four')->nullable();
            $table->text('sub_des_four')->nullable();
            $table->text('sub_image_four')->nullable();
            $table->string('sub_header_four')->nullable();
            $table->json('sub_list_four')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_m_s');
    }
};
