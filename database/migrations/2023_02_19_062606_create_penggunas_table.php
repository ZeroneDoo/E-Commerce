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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string("email")->unique();
            $table->string("username");
            $table->enum("jenis_kelamin",["Pria", "Wanita"]);
            $table->string("telpon")->nullable();
            $table->string("password");
            $table->string("profile")->default('default.png');
            $table->string("role")->default("user");
            $table->string("google_id")->nullable()->unique();
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
