<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loss_reasoning_system', function (Blueprint $table) {
            $table->id();
            $table->integer('stopid');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('machine_name');
            $table->string('loss_category');
            $table->string('loss_reason');
            $table->integer('loss_duration');
            $table->boolval('can_edit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loss_reasoning_system');
    }
};
