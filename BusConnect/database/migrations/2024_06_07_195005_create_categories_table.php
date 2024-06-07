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
    Schema::create('categories', function (Blueprint $table) {
        // $table->string('image')->nullable();
        $table->id();
        $table->string('title');
        $table->string('route_outbound');
        $table->string('route_inbound');
        $table->string('operating_time');
        $table->decimal('price', 10, 2);
        $table->boolean('status')->default(true);
        $table->timestamps();
        $table->softDeletes();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
