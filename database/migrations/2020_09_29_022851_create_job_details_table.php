<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('jobs');
            $table->mediumText('benefits');
            $table->mediumText('application_process');
            $table->mediumText('further_queries')->nullable();
            $table->mediumText('eligibilities');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('official_link')->nullable();
            $table->json('elegible_regions')->nullable();
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
        Schema::dropIfExists('job_details');
    }
}
