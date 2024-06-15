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
        Schema::table('transaksi_pendapatan', function (Blueprint $table) {
            //
            $table->date('tanggal_tpendapatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_pendapatan', function (Blueprint $table) {
            //
            $table->dropColumn('tanggal_tpendapatan');
        });
    }
};
