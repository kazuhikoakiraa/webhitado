<?php

use App\Models\order;
use App\Models\product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orderproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(product::class)->cascadeOnDelete();
            $table->foreignIdFor(order::class)->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderproducts');
    }
};