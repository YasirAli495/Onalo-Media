<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('jobs', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('company');
        $table->text('description');
        $table->decimal('salary', 10, 2);
        $table->string('location');
        $table->enum('job_type', ['FULL_TIME', 'PART_TIME', 'CONTRACT']);
        $table->string('employer_logo')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
