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
        Schema::create('siakad.score_transfers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('student_id');
            $table->uuid('course_id');
            $table->string('origin_course_code');
            $table->string('origin_course_name');
            $table->double('origin_credit');
            $table->double('credit_recognized');
            $table->string('origin_grade', 3);
            $table->string('grade_recognized', 3);
            $table->double('score_recognized');
            $table->timestamps();
            // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('course_id')->references('id')->on('courses')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siakad.score_transfers');
    }
};
