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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_classes')->constrained('classes')->onDelete('cascade');
            $table->foreignId('id_period')->constrained('periods')->onDelete('cascade');
            $table->integer('nis');
            $table->string('name', 50);
            $table->string('major', 5);
            $table->string('gender', 5);
            $table->text('address');
            $table->string('phone', 20);
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
        Schema::dropIfExists('students');
    }
};
