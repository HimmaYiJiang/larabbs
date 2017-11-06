<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->comment('帖子标题');
            $table->text('body')->comment('帖子内容');
            $table->integer('user_id')->index()->comment('用户 ID')->unsigned();
            $table->integer('category_id')->index()->comment('分类 ID')->unsigned();
            $table->integer('reply_count')->default(0)->unsigned()->comment('回复数量');
            $table->integer('view_count')->default(0)->unsigned()->comment('看总数');
            $table->integer('last_reply_user_id')->default(0)->unsigned()->comment('最后回复的用户 ID');
            $table->integer('order')->default(0)->comment('排序');
            $table->text('excerpt')->comment('文章摘要');
            $table->string('slug')->nullable()->comment('友好链接');
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
        Schema::dropIfExists('topics');
    }
}
