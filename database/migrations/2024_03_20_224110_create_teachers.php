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
        
    if (!Schema::hasTable('teachers')) {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->enum('gender', ['male', 'female', 'other'])->default('male');
            $table->string('phone');
            $table->date('dateofbirth');
            $table->string('address');
            $table->string('start_date');
           
            $table->timestamps();
        });
    }
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
