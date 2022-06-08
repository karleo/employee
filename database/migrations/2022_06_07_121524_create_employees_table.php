<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_no',100);
            $table->string('fname',255);
            $table->string('mname',200)->nullable();
            $table->string('lname',255);
            $table->string('contact_no',255);
            $table->string('mobile_no',255)->nullbale();
            $table->string('address',255);
            $table->string('company',255)->nullable();
            $table->string('company_add',255)->nullable();
            $table->string('email_add',255)->nullable();
            $table->string('website',255)->nullable();
            $table->string('photo',255)->nullable();
            $table->string('qr_path',255)->nullable();
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
        Schema::dropIfExists('employees');
    }
}
