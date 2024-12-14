<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('user_id'); // Foreign key for user
            $table->unsignedBigInteger('course_id'); // Foreign key for course
            $table->string('file'); // Certificate file name or path
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

            // Indexes for foreign key columns
            $table->index('user_id');
            $table->index('course_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
