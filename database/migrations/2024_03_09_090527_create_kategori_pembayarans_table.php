<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kpembayaran');
            $table->boolean('status_kpembayaran')->default(true);
            $table->enum('tipe_kpembayaran', ['cash', 'transfer', 'deposit']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_pembayaran');
    }
};
