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
        Schema::create('data_murids', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis');
            $table->string('nisn');
            $table->string('tempat_tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('agama');
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->text('alamat');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('orangtua_id');
            
            $table->foreign('kelas_id')
                  ->references('id')->on('kelas')
                  ->onDelete('cascade');
            $table->foreign('orangtua_id')
                  ->references('id')->on('orang_tuas')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_murids');
    }
};
