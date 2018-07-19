<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('domain_id');
            $table->integer('count')->default(0);
            $table->string('title');
            $table->string('url');
            $table->integer('lastvisit')->default(0);
            $table->integer('acumo')->default(0);
            $table->string('lastvisitdisplay')->default(0);
            $table->string('nextvisit')->default(0);
            $table->integer('frequency')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
