<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_new_applicant', function (Blueprint $table) {
            $table->unsignedBigInteger('appointment_id');
            $table->foreign('appointment_id')->references('appointment_id')->on('appointment');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');
            $table->integer('age');
            $table->date('birthday');
            $table->string('religion');
            $table->string('ethnic_group');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('blood_type');
            $table->string('disability_type');
            $table->string('disability_cause');
            $table->string('address');
            $table->string('barangay');
            $table->integer('phone_number');
            $table->string('telephone_number');
            $table->string('email');
            $table->string('educational_attainment');
            $table->string('employment_status');
            $table->string('employment_category');
            $table->string('employment_type');
            $table->string('occupation');
            $table->string('organization_affliated');
            $table->string('organization_contact_person');
            $table->integer('organization_office_address');
            $table->integer('organization_telephone_number');
            $table->string('sss_number');
            $table->string('gsis_number');
            $table->string('pagibig_number');
            $table->string('philhealth_number');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guardian_name');
        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_new_applicant');
    }
};
