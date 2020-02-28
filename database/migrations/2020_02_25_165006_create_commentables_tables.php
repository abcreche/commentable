<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentablesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->morphs('commentable');
            $table->unsignedBigInteger('author_id')->nullable()->index();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->text('message')->nullable();
            $table->boolean('is_public')->default(true);
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
        Schema::dropIfExists('payments');
    }
}
