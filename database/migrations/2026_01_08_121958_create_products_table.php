<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->longText('highlight')->nullable();
            $table->longText('description')->nullable();
            $table->longText('specification')->nullable();
            $table->longText('application')->nullable();
            $table->string('image')->nullable();
            $table->json('sub_images')->nullable();
            $table->timestamps();           
            $table->foreign('category_id')
                  ->references('id')
                  ->on('subcategories')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
