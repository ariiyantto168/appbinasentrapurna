<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsuransiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuransi', function (Blueprint $table) {
            $table->increments('idasuransi');
            $table->integer('idkodecabang');
            $table->integer('idbangunan');
            $table->string('nomoraplikasi');
            $table->string('name');
            $table->string('usia');
            $table->string('jangkawaktu');
            $table->string('hargabangunan');
            $table->string('tipebangunan');
            $table->string('premi');
            $table->timestamps();
            $table->SoftDeletes();
            // $table->string('created_by');
            // $table->string('updated_by')->nullable();
            // $table->string('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asuransi');
    }
}
