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
        Schema::create('emploees', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");     
            $table->string("LastName");     
            $table->string("tazkera")->unique();
            
            $table->string("email")->unique();
            $table->string("phone")->nullable();
            $table->foreignId("designation_id")->constrained("designations")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploees');
    }
};
