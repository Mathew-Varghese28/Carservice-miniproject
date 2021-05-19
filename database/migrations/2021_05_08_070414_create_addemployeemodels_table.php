<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddemployeemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addemployeemodels', function (Blueprint $table) {
            $table->id();
            $table->string('EmployeeNO');
            $table->string('Name');
            $table->string('DateofBirth');
            $table->string('Address');
            $table->string('Designation');
            $table->string('Salary');
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
        Schema::dropIfExists('addemployeemodels');
    }
}
