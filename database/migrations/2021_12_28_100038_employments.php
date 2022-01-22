<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id('eid');
            $table->string('email');
            $table->string('alt_email');
            $table->date('join');
            $table->integer('emp_type');
            $table->integer('work_agr');
            $table->integer('status');
            $table->string('payment');
            $table->string('work_agr_type');
            $table->string('payment_type');
            $table->date('alt_date');
            $table->integer('unit');
            $table->integer('sub_unit');
            $table->integer('position');
            $table->string('name');
            $table->integer('id_nik');
            $table->date('birthplace');
            $table->string('gender');
            $table->string('phone');
            $table->string('religion');
            $table->integer('province');
            $table->integer('city');
            $table->integer('sub');
            $table->integer('zip');
            $table->string('address');
            $table->string('npwp');
            $table->string('marriage');
            $table->date('birthdate');
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
        //
    }
}
