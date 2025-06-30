<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('tables', function (Blueprint $table) {
        $table->id();
        $table->string('number'); // nomor meja, bisa 01, 02, dsb
        $table->boolean('available')->default(true); // status tersedia atau tidak
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
