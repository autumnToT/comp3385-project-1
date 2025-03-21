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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
			$table->string('title');
			$table->integer('number_of_bedrooms');
			$table->float('number_of_bathrooms');
			$table->string('location');
			$table->decimal('price',10, 2);
			$table->string('type');
			$table->text('description')->nullable;
			$table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_tables');
    }
};
