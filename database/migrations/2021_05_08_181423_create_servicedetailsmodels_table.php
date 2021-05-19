<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\servicedetailsmodel;

class CreateServicedetailsmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicedetailsmodels', function (Blueprint $table) {
            $table->id();
            $table->string('s_id');
            $table->string('sphoneno');
            $table->string('sname');
            $table->string('smodel');
            $table->string('scarname');
            $table->string('scarno');
            $table->string('sservicetype');
            $table->string('sdateentered');
            $table->string('sothers');
            $table->string('sstatus')->nullable();
            $table->string('scost')->nullable();
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
        Schema::dropIfExists('servicedetailsmodels');
    }
}
