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
        Schema::create('business_trips', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('type');
            $table->text('goal');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('adress');
            $table->longText('list_person');
            $table->text('data_name');
            $table->integer('invite_count');
            $table->integer('ball');
            $table->string('quarter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_trips');
    }
};