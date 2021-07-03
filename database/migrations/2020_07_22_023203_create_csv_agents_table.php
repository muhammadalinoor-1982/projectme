<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsvAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('threesession_id');
            $table->string('total_call');
            $table->string('total_ticket');
            $table->unsignedBigInteger('created_by');
            $table->string('user_name');
            $table->unsignedBigInteger('agent_summary_id')->nullable();
            $table->foreign('agent_summary_id')->references('id')->on('agent_summaries');
            $table->softDeletes();
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
        Schema::dropIfExists('csv_agents');
    }
}
