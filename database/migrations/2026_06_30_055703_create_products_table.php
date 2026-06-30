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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('description',500)->nullable();
            $table->string('sku',50);
            $table->double('price');
            $table->double('buying_price');
            $table->tinyInteger('stock');
            $table->string('image',100)->nullable();
            $table->tinyInteger('category_id');
            $table->tinyInteger('sub_category_id');
            $table->tinyInteger('unit_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
