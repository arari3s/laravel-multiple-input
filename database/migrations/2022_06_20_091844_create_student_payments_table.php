<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_payments', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('student_classrooms_id');
            $table->bigInteger('spp_id')->nullable();
            $table->bigInteger('sarana_id')->nullable();
            $table->bigInteger('pts1_id')->nullable();
            $table->bigInteger('pts2_id')->nullable();
            $table->bigInteger('pas_id')->nullable();
            $table->bigInteger('pat_id')->nullable();
            $table->bigInteger('infaq_id')->nullable();
            $table->bigInteger('pkl_id')->nullable();
            $table->bigInteger('ki_id')->nullable();
            $table->bigInteger('perpisahan_id')->nullable();
            $table->bigInteger('du_id')->nullable();
            $table->bigInteger('other_id')->nullable();

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
        Schema::dropIfExists('student_payments');
    }
};
