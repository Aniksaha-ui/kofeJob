<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignerProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designer_projects', function (Blueprint $table) {
            $table->id();
            $table->Integer('userId');
            $table->Integer('seller_id');
            $table->Integer('seller_name');
            $table->Integer('projectId');
            $table->string('projectName');
            $table->Integer('category_id');
            $table->string('priceType');
            $table->Integer('fixedPrice');
            $table->Integer('hourlyPrice');
            $table->Integer('bidingPrice');
            $table->string('expertise');
            $table->string('projectPeriod');
            $table->string('startingDate');
            $table->string('docs');
            $table->string('Links');
            $table->string('description');
            $table->string('status');
            $table->string('review');
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
        Schema::dropIfExists('designer_projects');
    }
}
