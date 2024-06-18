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
        Schema::table('pemakaians', function (Blueprint $table) {
            $table->unsignedBigInteger('id_persediaans');
            $table->foreign('id_persediaans')->references('id')->on('persediaans')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pemakaians', function (Blueprint $table) {
            //
        });
    }
};
