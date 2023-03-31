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
        Schema::create('appointment_apps', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('users_id')->constrained();
            // $table->foreignId('services_id')->constrained();
            // $table->foreignId('dentists_id')->constrained();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('services_id');
            $table->unsignedBigInteger('dentists_id');
            $table->string('date');
            $table->string('time');
            $table->integer('app_status')->default(0);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('dentists_id')->references('id')->on('dentists')->onDelete('cascade');
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
        Schema::dropIfExists('appointment_apps');
    }
};
