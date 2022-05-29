<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_requirements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->Integer('designer_id');
            $table->Integer('seller_id');
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
            $table->string('designerReview');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_requirements');
    }
}
