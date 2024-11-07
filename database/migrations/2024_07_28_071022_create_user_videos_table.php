<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVideosTable extends Migration
{
    public function up()
    {
        Schema::create('user_videos', function (Blueprint $table) {
            $table->id(); // big integer (unsigned) with auto increment and primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // foreign key to users table
            $table->foreignId('video_id')->constrained('videos')->onDelete('cascade'); // foreign key to videos table
            $table->boolean('completed')->default(false); // boolean column to track completion status
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_videos'); // drop the table if it exists
    }
}

