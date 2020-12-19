<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //------------------------------------------------------------>guru
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('beranda_id')->nullable()->constrained('berandas')->onDelete('cascade')->onUpdate('cascade');
        });

        //------------------------------------------------------------>siswa
        Schema::table('siswas', function (Blueprint $table) {
            $table->foreignId('guru_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('walis', function (Blueprint $table) {
            $table->foreignId('siswa_id')->nullable()->constrained('siswas')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('ayahs', function (Blueprint $table) {
            $table->foreignId('siswa_id')->nullable()->constrained('siswas')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('ibus', function (Blueprint $table) {
            $table->foreignId('siswa_id')->nullable()->constrained('siswas')->onDelete('cascade')->onUpdate('cascade');
        });

        //------------------------------------------------------------>beranda
        Schema::table('berandas', function (Blueprint $table) {
            $table->foreignId('artikel_id')->nullable()->constrained('artikels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('berita_id')->nullable()->constrained('beritas')->onDelete('cascade')->onUpdate('cascade');
        });

        //------------------------------------------------------------>akademik
        Schema::table('akademiks', function (Blueprint $table) {
            $table->foreignId('guru_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('prestasi_id')->nullable()->constrained('prestasis')->onDelete('cascade')->onUpdate('cascade');
        });

        //------------------------------------------------------------>informasi
        Schema::table('informasis', function (Blueprint $table) {
            $table->foreignId('pengasuhan_id')->nullable()->constrained('pengasuhans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('ekstrakuli_id')->nullable()->constrained('ekstrakulis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('harian_id')->nullable()->constrained('harians')->onDelete('cascade')->onUpdate('cascade');
        });

        //------------------------------------------------------------>pendaftaran
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->foreignId('siswa_id')->nullable()->constrained('siswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('download_id')->nullable()->constrained('downloads')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
