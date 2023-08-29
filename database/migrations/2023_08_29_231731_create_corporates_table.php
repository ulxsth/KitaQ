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
        Schema::create('corporates', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name")->unique();
            $table->string("registered_by");
            $table->text("address");
            $table->date("founded_at");

            $table->foreign("registered_by")->references("email")->on("users")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporates');
    }
};
