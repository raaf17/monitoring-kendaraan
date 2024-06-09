<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('nama_kendaraan');
            $table->string('jenis_kendaraan');
            $table->string('tipe_kendaraan');
            $table->integer('sewa')->nullable();
            $table->double('biaya', 16, 2)->nullable();
            $table->date('dari_tanggal')->nullable();
            $table->date('sampai_tanggal')->nullable();
            $table->integer('status_unit')->nullable();
            $table->integer('status')->nullable();
            $table->integer('bbm')->nullable();
            $table->date('jadwal_service')->nullable();
            $table->string('created_by');
            $table->timestamp('created_at');
            $table->string('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
}
