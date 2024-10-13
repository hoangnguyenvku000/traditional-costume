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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name');
            $table->text('details')->nullable();
            $table->string('img_path')->nullable();
            $table->decimal('price', 10, 2);
            $table->timestamps(); // Adds created_at and updated_at
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }

    
};
