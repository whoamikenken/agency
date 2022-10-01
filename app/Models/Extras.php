<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
            $arrcol = array("cert_pdos_date", "cert_pdos_release_date", "cert_owwa_date","cert_owwa_release_date", "cert_nc2_by_applicant", "cert_nc2_payment_status", "cert_nc2_cost");
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
            "med_first_date" => "First Dose Date",
            "med_first_result" => "First Dose Result",
            "med_first_clinic" => "First Dose Clinic",
            "med_first_cost" => "First Dose Cost",
            "med_second_date" => "Second Dose Date",
            "med_second_result" => "Second Dose Result",
            "med_second_clinic" => "Second Dose Clinic",
            "med_second_cost" => "Second Dose Cost",
            "med_third_date" => "Third Dose Date",
            "med_third_result" => "Third Dose Result",
            "med_third_clinic" => "Third Dose Clinic",
            "med_third_cost" => "Third Dose Cost",
            "med_fourth_date" => "Fourth Dose Date",
            "med_fourth_result" => "Fourth Dose Result",
            "med_fourth_clinic" => "Fourth Dose Clinic",
            "med_fourth_cost" => "Fourth Dose Cost",
            "cert_pdos_date" => "PDOS Applied",
            "cert_pdos_release_date" => "PDOS Release",
            "cert_owwa_date" => "OWWA Applied",
            "cert_owwa_release_date" => "OWWA Release",
            "cert_nc2_by_applicant" => "NCII By Applicant",
            "cert_nc2_payment_status" => "NCII Payment Status",
            "cert_nc2_cost" => "NCII Cost",
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
            "user_profile" => "Body Photo"
        );
        
        return $return[$data];
    }
}
