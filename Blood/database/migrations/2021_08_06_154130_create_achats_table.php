<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_achat_id');
            $table->foreign('patient_achat_id')->references('id')->on('Patients');
            $table->unsignedBigInteger('blood_achat_id');
            $table->foreign('blood_achat_id')->references('id')->on('Bloods');
            $table->date('date_cmd');
            $table->string('statut_cmd');
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
        Schema::dropIfExists('achats');
    }
}
