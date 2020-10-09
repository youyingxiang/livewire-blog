<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_id')->default(0)->comment('文章id');
            $table->unsignedInteger('parent_id')->default(0)->comment('评论人id');
            $table->unsignedInteger('target_id')->default(0)->comment('被回复人的id');
            $table->unsignedInteger('user_id')->default(0)->comment('回复人id');
            $table->text('content')->comment('内容');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
