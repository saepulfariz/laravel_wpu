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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // slug gak boleh ada yang sama
            $table->string('slug')->unique();
            // buat kecilan data post
            $table->text('excerpt');
            $table->text('body');
            // ini tipe data bikin time
            $table->timestamp('publish_at')->nullable();

            // ini buat method bikin created_at dan updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
