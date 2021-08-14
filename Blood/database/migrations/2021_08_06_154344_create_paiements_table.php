<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_pay_id');
            $table->foreign('patient_pay_id')->references('id')->on('Patients');
            $table->unsignedBigInteger('patient_achat_id');
            $table->foreign('patient_achat_id')->references('id')->on('Achats');
            $table->date('date_payement');
            $table->string('methode');
            $table->float('montant');
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
        Schema::dropIfExists('paiements');
    }
}
