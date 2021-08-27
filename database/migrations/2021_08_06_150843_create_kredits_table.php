<?php

use App\Models\Anggota;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredits', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pinjam')->default(Carbon::now());
            $table->integer('jangka_waktu')->default(0);
            $table->bigInteger('jumlah')->default(0);
            $table->foreignIdFor(Anggota::class)->nullable()->constrained()->nullOnDelete();
            $table->bigInteger('jumlah_ansuran')->default(0);
            $table->boolean('validasi')->default(false);
            $table->boolean('authorisasi')->default(false);
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
        Schema::dropIfExists('kredits');
    }
}
