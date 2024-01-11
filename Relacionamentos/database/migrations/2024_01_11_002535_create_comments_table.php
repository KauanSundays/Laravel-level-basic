<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->text('content')->nullable(false);
            $table->string('username')->nullable(false);
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

