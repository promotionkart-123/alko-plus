<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_no', 20);
            $table->string('applied_position')->index();
            $table->string('current_designation')->nullable();
            $table->string('current_organization')->nullable();
            $table->integer('total_experience')->nullable();
            $table->decimal('expected_salary', 10, 2)->nullable();
            $table->string('highest_qualification');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
