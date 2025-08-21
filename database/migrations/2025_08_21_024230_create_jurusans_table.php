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
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id(); // bigint unsigned auto_increment primary
            $table->string('name')->index(); // varchar(255), index
            $table->string('slug')->index(); // varchar(255), index
            $table->timestamps(); // created_at & updated_at (nullable timestamp)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};
