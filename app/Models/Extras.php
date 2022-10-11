<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Extras extends Model
{
    use HasFactory;
    
    public static function returnApplicantCols($desc = "")
    {
        
        if ($desc == "General Information") {
            $arrcol = array("applicant_id","er_ref", "maid_ref", "fullname", "fname", "lname", "mname", "contact", "address", "family_contact_name","family_contact","gender", "jobsite","branch", "sales_manager","date_applied","is_first", "abroad_experience","is_walkin", "total_cost", "user_profile", "user_profile_face");
        }elseif($desc == "Passport"){
            $arrcol = array("passport_no", "passport_issued", "passport_validity", "passport_place_issued");
        }elseif($desc == "Vaccination") {
            $arrcol = array("vac_first_dose_date", "vac_first_brand", "vac_first_country", "vac_second_dose_date", "vac_second_brand","vac_second_country", "vac_booster_dose_date", "vac_booster_brand", "vac_booster_country");
        }elseif($desc == "Bio Status") {
            $arrcol = array("bio_trans_date", "bio_lunch_date", "bio_status", "bio_availability");
        } elseif ($desc == "Job Order") {
            $arrcol = array("jo_received", "jo_confirmed", "jo_er_iscancel", "jo_maid_iscancel");
        } elseif ($desc == "Medical Record") {
            $arrcol = array("med_first_date", "med_first_result", "med_first_clinic", "med_first_cost", "med_second_date", "med_second_result", "med_second_clinic","med_second_cost", "med_third_date", "med_third_result", "med_third_clinic","med_third_cost", "med_fourth_date", "med_fourth_result", "med_fourth_clinic", "med_fourth_cost");
        } elseif ($desc == "Certificate") {
            $arrcol = array("cert_pdos_date", "cert_pdos_release_date", "cert_owwa_date","cert_owwa_release_date", "cert_nc2_by_applicant", "cert_nc2_payment_status","cert_nc2_cost","cert_prc", "cert_driver_license");
        } elseif ($desc == "VISA") {
            $arrcol = array("visa_number", "visa_date_received", "visa_date_expired", "visa_reactive_date", "visa_status", "visa_er_iscancel", "visa_maid_iscancel");
        } elseif ($desc == "OEC") {
            $arrcol = array("oec_number", "oec_contract_received", "oec_pagibig", "oec_date_filed","oec_date_expiration", "oec_flight_departure");
        }
        
        $return = '<div class="col-md-6 col-sm-12 col-lg-4"><h6 class="text-center">'.$desc.'</h6>';
        
        foreach ($arrcol as $row) {
            $col = Extras::showDesc($row);
            $return .= '<div class="form-check"><input class="form-check-input" type="checkbox" name="edata" value="'.$row.'"><label class="form-check-label">'.$col.'</label></div>';
        }
        $return .= "</div>";
        return $return;
    }
    
    public static function showDesc($data)
    {
        $return = array (
            "applicant_id" => "Applicant ID",
            "er_ref" => "E.R No",
            "maid_ref" => "MAID No",
            "fullname" => "Name",
            "lname" => "Last Name",
            "fname" => "First Name",
            "mname" => "Middle Name",
            "contact" => "Contact",
            "address" => "Address",
            "family_contact_name" => "Family Contact Name",
            "family_contact" => "Family Contact",
            "gender" => "Gender",
            "jobsite" => "Job Site",
            "branch" => "Branch",
            "sales_manager" => "Sales",
            "date_applied" => "Date Applied",
            "is_first" => "Is First Time?",
            "is_walkin" => "Is Walk In?",
            "total_cost" => "Total Cost",
            "abroad_experience" => "Experience",
            "passport_no" => "Passport No",
            "passport_issued" => "Date Issued",
            "passport_validity" => "Passport Validity",
            "passport_place_issued" => "Country Issued",
            "vac_first_dose_date" => "First Dose Date",
            "vac_first_brand" => "First Dose Brand",
            "vac_first_country" => "First Dose Country",
            "vac_second_dose_date" => "Second Dose Date",
            "vac_second_brand" => "Second Dose Brand",
            "vac_second_country" => "Second Dose Country",
            "vac_booster_dose_date" => "Booster Dose Date",
            "vac_booster_brand" => "Booster Dose Brand",
            "vac_booster_country" => "Booster Dose Country",
            "bio_status" => "Bio Status",
            "bio_trans_date" => "Bio Tranferred Date",
            "bio_lunch_date" => "Bio Lunch Date",
            "bio_availability" => "Availability",
            "jo_received" => "JO Date",
            "jo_confirmed" => "JO Confirm Date",
            "jo_er_iscancel" => "JO Cancel By ER",
            "jo_maid_iscancel" => "JO Cancel By MAID",
            "med_first_date" => "First Medical Date",
            "med_first_result" => "First Medical Result",
            "med_first_clinic" => "First Medical Clinic",
            "med_first_cost" => "First Medical Cost",
            "med_second_date" => "Second Medical Date",
            "med_second_result" => "Second Medical Result",
            "med_second_clinic" => "Second Medical Clinic",
            "med_second_cost" => "Second Medical Cost",
            "med_third_date" => "Third Medical Date",
            "med_third_result" => "Third Medical Result",
            "med_third_clinic" => "Third Medical Clinic",
            "med_third_cost" => "Third Medical Cost",
            "med_fourth_date" => "Fourth Medical Date",
            "med_fourth_result" => "Fourth Medical Result",
            "med_fourth_clinic" => "Fourth Medical Clinic",
            "med_fourth_cost" => "Fourth Medical Cost",
            "cert_pdos_date" => "PDOS Applied",
            "cert_pdos_release_date" => "PDOS Release",
            "cert_owwa_date" => "OWWA Applied",
            "cert_owwa_release_date" => "OWWA Release",
            "cert_nc2_by_applicant" => "NCII By Applicant",
            "cert_nc2_payment_status" => "NCII Payment Status",
            "cert_nc2_cost" => "NCII Cost",
            "cert_driver_license" => "Driver Lic.",
            "cert_prc" => "PRC",
            "visa_number" => "VISA No",
            "visa_date_received" => "VISA Eeceive",
            "visa_date_expired" => "VISA Expiration",
            "visa_reactive_date" => "VISA Reactive",
            "visa_status" => "VISA Status",
            "visa_er_iscancel" => "VISA ER Cancel",
            "visa_maid_iscancel" => "VISA MAID Cancel",
            "oec_number" => "OEC No",
            "oec_contract_received" => "OEC Receive",
            "oec_pagibig" => "OEC Pag-ibig",
            "oec_date_filed" => "OEC Filed",
            "oec_date_expiration" => "OEC Expiration",
            "oec_flight_departure" => "OEC Departure",
            "user_profile_face" => "Face Photo",
            "user_profile" => "Body Photo",
        );
        
        return $return[$data];
    }

    public static function getMedical(String $code = null)
    {
        return DB::table('medical')->where('code', $code)->value('description');
    }

    public static function getCountry(String $code = null)
    {
        return DB::table('countries')->where('code', $code)->value('description');
    }

    public static function filledDiploma(String $applicant_id = null)
    {
        $diplomaResult =  DB::table('diplomas')->where('applicant_id', $applicant_id)->get();
        if(count($diplomaResult) > 0){
            return "Filed";
        }else{
            return "Not Filed";
        }
    }

    public static function countLackingApplicant()
    {
        $result = DB::select("SELECT a.applicant_id FROM applicants a LEFT JOIN diplomas b ON a.applicant_id = b.applicant_id WHERE a.`passport` IS NULL OR a.`med_first_cert` IS NULL OR a.`med_second_cert` IS NULL OR a.`med_third_cert` IS NULL OR a.`med_fourth_cert` IS NULL OR a.`sup_doc_id988a` IS NULL OR a.`sup_pt6` IS NULL OR a.`sup_coe` IS NULL OR a.`sup_hq` IS NULL OR a.`sup_polohk` IS NULL OR a.`sup_infosheet` IS NULL OR a.`sup_privacy_policy` IS NULL OR a.`sup_affidavit` IS NULL OR a.`sup_mmr_vac` IS NULL OR a.`cert_ereg` IS NULL OR a.`cert_peos` IS NULL OR a.`cert_pdos` IS NULL OR a.`cert_owwa` IS NULL OR a.`cert_nc2` IS NULL OR a.`cert_ofw_infosheet` IS NULL OR a.`visa` IS NULL OR a.`oec_covid_dec` IS NULL OR a.`oec_insurance` IS NULL OR a.`oec_pregnancy_test` IS NULL OR a.`oec_swab_test` IS NULL OR a.`user_profile` IS NULL OR a.`user_profile_face` IS NULL OR a.`user_video` IS NULL OR b.`diploma`");

        return count($result);
    }

    public static function countUpcomingMonthDeparture()
    {
        $result = DB::select("SELECT oec_flight_departure FROM applicants WHERE oec_flight_departure BETWEEN CURDATE() AND LAST_DAY(CURDATE())");

        return count($result);
    }

    public static function countActiveApplicant()
    {
        $result = DB::select("SELECT oec_flight_departure FROM applicants WHERE isactive = 'Active'");

        return count($result);
    }

    public static function countExpiredPassportAndVisa()
    {
        $result = DB::select("SELECT visa_date_expired, passport_validity FROM applicants WHERE `visa_date_expired` < CURDATE() OR passport_validity < CURDATE()");

        return count($result);
    }

    public static function getDepartureMonth($month = null)
    {
        $result = DB::select("SELECT visa_date_expired, passport_validity,oec_flight_departure FROM applicants WHERE MONTH(oec_flight_departure) = $month AND YEAR(oec_flight_departure) = YEAR(CURDATE()) AND isactive = 'Active'");

        return count($result);
    }

    public static function getApplicantInBranch($branch = null)
    {
        $result = DB::select("SELECT visa_date_expired, passport_validity,oec_flight_departure FROM applicants WHERE branch = '$branch' AND isactive = 'Active'");

        return count($result);
    }
}
