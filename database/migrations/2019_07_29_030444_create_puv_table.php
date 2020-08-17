<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('puv', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('firstname', 60)->nullable();
            $table->string('middlename', 60)->nullable();
            $table->string('lastname', 60)->nullable();
            $table->string('address', 120)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('kin', 60)->nullable();
            $table->string('Civil_status', 60)->nullable();
            $table->string('Gender', 60)->nullable();
            $table->char('Telephone', 10)->nullable();
            $table->char('Mobile', 11)->nullable();
            $table->char('NumberYears', 5)->nullable();
            $table->string('licenseNumber', 60)->nullable();
            $table->date('LicenseDate')->nullable();
            $table->char('Restriction', 5)->nullable();
            $table->string('AffilationGroup', 60)->nullable();
            $table->date('date_hired')->nullable();
            $table->string('held', 60)->nullable();
            $table->char('score', 5)->nullable();
            $table->date('date_hired1')->nullable();
            $table->string('held1', 60)->nullable();
            $table->char('score1', 5)->nullable();
            $table->date('date_hired2')->nullable();
            $table->string('held2', 60)->nullable();
            $table->char('score2', 5)->nullable();
            $table->date('date_hired3')->nullable();
            $table->string('held3', 60)->nullable();
            $table->char('score3', 5)->nullable();
            $table->string('remarks', 60)->nullable();
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
        Schema::dropIfExists('puv');
    }
}
