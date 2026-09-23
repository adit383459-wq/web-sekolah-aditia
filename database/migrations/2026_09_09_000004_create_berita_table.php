<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('berita', function (Blueprint $table) {
            $table->id(); $table->string('judul',200); $table->string('slug',220)->unique();
            $table->string('ringkasan',500)->nullable(); $table->longText('isi')->nullable(); $table->string('gambar')->nullable();
            $table->timestamp('published_at')->nullable(); $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('berita'); }
};
