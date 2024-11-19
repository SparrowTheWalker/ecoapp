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
        Schema::create('large_cashes', function (Blueprint $table) {
            $table->id();
            $table->string('BRANCH_NAME')->nullable();
            $table->string('AC_BRANCH')->nullable();
            $table->string('CIF')->nullable();
            $table->string('BANK_CODE')->nullable();
            $table->string('TRN_DT')->nullable();
            $table->string('NAME_OF_PERSANON_TRANSACTING')->nullable();
            $table->string('AC_NO')->nullable();
            $table->string('ID_OF_PERSON_TRANSACTING')->nullable();pj
            $table->string('NATIONALITY_OF_PERSON_TRANSACTING')->nullable();
            $table->string('DESCRIPTION_OF_TXN')->nullable();
            $table->string('NARRATIONS')->nullable();
            $table->string('AC_CCY')->nullable();
            $table->string('LCY_AMOUNT')->nullable();
            $table->string('USD_EQUIV')->nullable();
            $table->string('TRN_CODE')->nullable();
            $table->string('TRN_REF_NO')->nullable();
            $table->string('TRANSACTING_CUSTOMER')->nullable();
            $table->string('CUSTOMER_NAME')->nullable();
            $table->string('EXCH_RATE')->nullable();
            $table->string('PURPOSE_OF_TRANSACTION')->nullable();
            $table->string('SOURCE_OF_FUNDS')->nullable();
            $table->string('NATURE_OF_BUSINESS')->nullable();
            $table->string('PIN_NO_OF_ENTITY')->nullable();
            $table->string('NAME_OF_SIGNATORIES')->nullable();
            $table->string('ID_PP_NO_OF_SIGNATORIES')->nullable();
            $table->string('OCCUPATION_OF_SIGNATORIES')->nullable();
            $table->string('DOB_OF_SIGNATORIES')->nullable();
            $table->string('NATIONALITY_OF_SIGNATORIES')->nullable();
            $table->string('reveiwer')->nullable();
            $table->string('cc')->nullable();
            $table->string('status')->nullable();
            $table->string('TRNCODES')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('large_cashes');
    }
};
