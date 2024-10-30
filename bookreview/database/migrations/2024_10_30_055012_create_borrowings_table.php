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
        Schema::create('reviews', function (Blueprint $table) {
            $table->integerIncrements('ReviewID');
            $table->unsignedInteger('BookID'); // Đảm bảo kiểu dữ liệu là unsignedBigInteger
            $table->unsignedBigInteger('UserID'); // Đảm bảo kiểu dữ liệu là unsignedBigInteger
            $table->integer('Rating');
            $table->text('ReviewText');
            $table->date('ReviewDate');
            $table->timestamps();

            // Định nghĩa khóa ngoại sau khi tạo cột
            $table->foreign('BookID')->references('BookID')->on('books')->onDelete('cascade');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
