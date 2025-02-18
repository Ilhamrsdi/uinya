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
        Schema::create('siakad.settings', function (Blueprint $table) {
            $table->id();
            $table->enum('group', ['college', 'mid_exam', 'final_exam', 'general', 'config', 'image', 'feeder']);
            $table->string('key')->unique();
            $table->string('name');
            $table->text('value');
            $table->boolean('is_default')->default(false);
            $table->string('display_suffix')->nullable();
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
        Schema::dropIfExists('siakad.settings');
    }
};
