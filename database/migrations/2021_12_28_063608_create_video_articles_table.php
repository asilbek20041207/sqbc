<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('video_articles', function (Blueprint $table) {
            $table->id();
            $table->text('preview');
            $table->text('title_ru');
            $table->text('title_uz');
            $table->text('link');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('video_articles');
    }
}
