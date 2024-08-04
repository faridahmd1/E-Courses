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
        Schema::create('paket_user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paketable_id')->constrained(table: 'paket_users', indexName: 'paket_user_details_paket_users_id')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('paketable_type', ['soal', 'materi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_user_details');
    }
};
