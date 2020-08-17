<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep', function (Blueprint $table) {
            $table->increments('id', true);
            $table->char('IRSNumber', 10)->nullable();
            $table->string('NameAppOperator', 60)->nullable();
            $table->sstring('Violations', 60)->nullable();
            $table->string('CaseNumber', 60)->nullable();
            $table->string('TypeService', 60)->nullable();
            $table->string('PlateNumber', 60)->nullable();
            $table->string('MVIRserial', 60)->nullable();
            $table->string('Offense', 30)->nullable();
            $table->string('Remarks', 60)->nullable();
            $table->date('Date_of_payment')->nullable();
            $table->string('Release_order', 60)->nullable();
            $table->date('Date_of_released')->nullable();
            $table->timestamps();
            $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('rep');
    }
}
