<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name');
            $table->timestamps(); // Adds created_at and updated_at
        });
        Schema::create('type_details', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
            $table->text('detail')->nullable();
            $table->string('img_path')->nullable();
            $table->timestamps(); // Adds created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('types');
        Schema::dropIfExists('type_details');

        
    }
};
