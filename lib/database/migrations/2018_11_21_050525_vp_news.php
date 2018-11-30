<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_name');
            $table->string('news_slug');
            $table->string('news_img');
            $table->text('news_summary');
            $table->text('news_detail');
            $table->tinyInteger('news_featured');
            $table->integer('news_cate')->unsigned();
            
            $table->foreign('news_cate')
                    ->references('newscate_id')
                    ->on('vp_newscategories')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('vp_news');
    }
}
