<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru');
            $table->string('title_uz');
            $table->text('desc1_ru');
            $table->text('desc1_uz');
            $table->integer('specialists_count');
            $table->integer('projects_count');
            $table->text('desc2_ru');
            $table->text('desc2_uz');
            $table->string('service1_ru');
            $table->string('service1_uz');
            $table->string('service2_ru');
            $table->string('service2_uz');
            $table->string('service3_ru');
            $table->string('service3_uz');
            $table->string('plan1_ru');
            $table->string('plan1_uz');
            $table->string('plan2_ru');
            $table->string('plan2_uz');
            $table->string('plan3_ru');
            $table->string('plan3_uz');
            $table->string('plan4_ru');
            $table->string('plan4_uz');
            $table->string('values_title1_ru');
            $table->string('values_title1_uz');
            $table->string('values_title2_ru');
            $table->string('values_title2_uz');
            $table->string('values_title3_ru');
            $table->string('values_title3_uz');
            $table->string('values_title4_ru');
            $table->string('values_title4_uz');
            $table->text('values_desc1_ru');
            $table->text('values_desc1_uz');
            $table->text('values_desc2_ru');
            $table->text('values_desc2_uz');
            $table->text('values_desc3_ru');
            $table->text('values_desc3_uz');
            $table->text('values_desc4_ru');
            $table->text('values_desc4_uz');
            // FILES
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
            $table->text('image4');
            $table->text('charter');
            $table->text('supervisory_board');
            $table->text('company_structure_ru');
            $table->text('company_structure_uz');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('information');
    }
}
