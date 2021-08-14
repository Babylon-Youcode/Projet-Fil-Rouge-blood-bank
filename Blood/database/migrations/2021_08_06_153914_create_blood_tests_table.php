<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_blood_id');
            $table->foreign('test_blood_id')->references('id')->on('bloods');
            $table->unsignedBigInteger('test_donor_id');
            $table->foreign('test_donor_id')->references('id')->on('donors');
            $table->string('type');
            $table->string('Ag_HMS');
            $table->string('AC_HIV');
            $table->string('AC_HOV');
            $table->string('VDRL');
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
        Schema::dropIfExists('blood_tests');
    }
}
