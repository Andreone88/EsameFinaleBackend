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
        Schema::create('files', function (Blueprint $table) {
            $table->id('idFile');
            $table->unsignedTinyInteger('idRecord');
            $table->string('tabella', 45);
            $table->string('nome', 45);
            $table->unsignedInteger('size');
            $table->string('ext', 6);
            $table->text('descrizione');
            $table->string('formato', 45);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
