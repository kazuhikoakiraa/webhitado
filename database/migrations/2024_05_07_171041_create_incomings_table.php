<?php

use App\Models\item;
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
        Schema::create('incomings', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(item::class)->cascadeOnDelete();
            $table->string('kategori');
            $table->integer('harga');
            $table->string('nama');
            $table->integer('stock');
            $table->string('satuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomings');
    }
};