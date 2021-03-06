<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwitterPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tweet_id')->nullable()->default(null);
            $table->string('post_body');
            $table->bigInteger('favourites')->nullable()->default(null);
            $table->bigInteger('retweets')->nullable()->default(null);
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
        Schema::dropIfExists('twitter_posts');
    }
}
