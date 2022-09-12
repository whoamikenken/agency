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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_id', 30)->nullable();
            $table->string('er_ref', 30)->nullable();
            $table->string('maid_ref', 30)->nullable();
            $table->string('jobsite', 30)->nullable();
            $table->string('branch', 30)->nullable();
            $table->string('sales_manager', 30)->nullable();
            $table->string('fname', 30)->nullable();
            $table->string('mname', 30)->nullable();
            $table->string('lname', 30)->nullable();
            $table->string('contact', 30)->nullable();
            $table->string('address', 50)->nullable();
            $table->string('family_contact_name', 30)->nullable();
            $table->string('family_contact', 30)->nullable();
            $table->string('is_ex_abroad', 30)->default('No');
            $table->integer('abroad_experience')->default(0);
            $table->string('is_first', 30)->default('Yes');
            $table->string('is_walkin', 30)->default('Yes');
            $table->date('date_applied')->nullable();
            $table->string('passport_no', 30)->default('Yes');
            $table->date('passport_issued')->nullable();
            $table->date('passport_validity')->nullable();
            $table->string('passport_place_issued', 30)->nullable()->default('PH');
            $table->date('vac_first_dose_date')->nullable();
            $table->string('vac_first_brand', 30)->nullable();
            $table->date('vac_second_dose_date')->nullable();
            $table->string('vac_second_brand', 30)->nullable();
            $table->date('vac_booster_dose_date')->nullable();
            $table->string('vac_booster_brand', 30)->nullable();
            $table->string('vac_country', 30)->nullable()->default('PH');
            $table->date('bio_trans_date')->nullable();
            $table->date('bio_lunch_date')->nullable();
            $table->string('bio_status', 30)->nullable()->default('Pending');
            $table->string('bio_availability', 30)->nullable()->default('Available');
            $table->date('jo_received')->nullable();
            $table->date('jo_confirmed')->nullable();
            $table->string('jo_er_iscancel', 30)->default('No');
            $table->string('jo_maid_iscancel', 30)->default('No');
            $table->date('med_first_date')->nullable();
            $table->string('med_first_result', 30)->nullable();
            $table->string('med_first_clinic', 30)->nullable();
            $table->string('med_first_cost', 30)->nullable();
            $table->date('med_second_date')->nullable();
            $table->string('med_second_result', 30)->nullable();
            $table->string('med_second_clinic', 30)->nullable();
            $table->string('med_second_cost', 30)->nullable();
            $table->string('sup_doc_id988a', 30)->nullable();
            $table->string('sup_pt6', 30)->nullable();
            $table->string('sup_coe', 30)->nullable();
            $table->string('sup_hq', 30)->nullable();
            $table->string('sup_polohk', 30)->nullable();
            $table->string('sup_infosheet', 30)->nullable();
            $table->string('sup_privacy_policy', 30)->nullable();
            $table->string('sup_affidavit', 30)->nullable();
            $table->string('sup_mmr_vac', 30)->nullable();
            $table->string('cert_ereg', 30)->nullable();
            $table->string('cert_peos', 30)->nullable();
            $table->string('cert_pdos', 30)->nullable();
            $table->date('cert_pdos_date')->nullable();
            $table->date('cert_pdos_release_date')->nullable();
            $table->string('cert_owwa', 30)->nullable();
            $table->date('cert_owwa_date')->nullable();
            $table->date('cert_owwa_release_date')->nullable();
            $table->string('cert_nc2', 30)->nullable();
            $table->string('cert_ofw_infosheet', 30)->nullable();
            $table->string('visa_number', 30)->nullable();
            $table->date('visa_date_received')->nullable();
            $table->date('visa_date_expired')->nullable();
            $table->date('visa_reactive_date')->nullable();
            $table->string('visa_status', 30)->nullable()->default('Pending');
            $table->string('visa_er_iscancel', 30)->default('No');
            $table->string('visa_maid_iscancel', 30)->default('No');
            $table->string('oec_number', 30)->nullable();
            $table->date('oec_contract_received')->nullable();
            $table->string('oec_covid_dec', 30)->nullable();
            $table->string('oec_pagibig', 30)->nullable();
            $table->string('oec_insurance', 30)->nullable();
            $table->date('oec_date_filed')->nullable();
            $table->date('oec_date_expiration')->nullable();
            $table->string('oec_pregnancy_test', 30)->nullable();
            $table->string('oec_swab_test', 30)->nullable();
            $table->date('oec_flight_departure')->nullable();
            $table->string('user_profile', 30)->nullable();
            $table->string('user_video', 30)->nullable();
            $table->string('isactive', 30)->nullable()->default('Active');
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->string('modified_by', 30)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->string('created_by', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
};
