<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orders_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('supplier_id');
            $table->dateTime('order_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
