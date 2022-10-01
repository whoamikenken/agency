<?php

$pdf = new \Mpdf\Mpdf(array('mode' => 'utf-8', 'format' => 'LETTER-L', 'orientation' => 'L'));
$pdf->SetTitle($reportName);

$info  = "  <style>
					.content{
						padding-left:1cm;
						padding-right:1cm;
					}
					
					.underline{
						border-bottom:1px solid black;
					}

					h5{
						color:white;
					}
				</style>";
$info .= "
		<body style='font-family:Book Antiqua;'>	
			<div>
				<table width='60%'  >
            <tr>
                <td rowspan='3' style='text-align: right;' width='60%'><img src='images/logo.png' style='width: 60px;text-align: center;' /></td>
                <td valign='middle' width='90%' style='padding: 0;text-align: center;' width='45%'><span style='font-size: 13px;'><b>KINGS MANPOWER SERVICES</b></span></td>
            </tr>
            <tr>
                <td valign='middle' style='padding: 0;text-align: center;'><span style='font-size: 13px;' width='45%'><strong>Envision and achieve an optimum goal</strong></span></td>
            </tr>
        </table>
			</div>
			<div class='content' style='margin-top:.1cm;'>
				<table  style='background-color: #772b28;'>
					<tr>
						<td>
						<h5>GENERAL INFORMATION</h5>
							<table width='100%' style='background-color: white;'>
								<tr>
									<td width='5%' style='font-size: 9px;color:black;'><b>Employee ID:</b></td>
									<td width='5%' style='font-size: 9px;'>" . $employeeid . "</td>
									<td width='15%'></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Last Name:</b></td>
									<td width='5%' style='font-size: 9px;'>" . $lname . "</td>
									<td width='15%'></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>First Name:</b></td>
									<td width='5%' style='font-size: 9px;'>" . $fname . "</td>
									<td width='15%'></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Middle Name:</b></td>
									<td width='5%' style='font-size: 9px;'>" . $mname . "</td>
									<td width='15%'></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Date Hired:</b></td>
									<td width='5%' style='font-size: 9px;'> " . date("M d, Y", strtotime($dateemployed)) . "</td>
									<td width='15%'></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Years in Service:</b></td>
									<td width='5%' style='font-size: 9px;'>" . $year_service . "</td>
									<td width='15%'></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Rank:</b></td>
									<td width='5%' style='font-size: 9px;'>" . $rank . "</td>
									<td width='15%'></td>
								</tr>
							</table>
						</td>
					<td align='right'>$img</td>
					</tr>
				</table>
			</div>
			<div class='content' style='margin-top:.1cm;'>
				<table width='100%' style='background-color: #772b28;'>
					<tr>
						<td>
						<h5>GOVERNMENT ID'S</h5>
							<table width='100%' style='background-color: white;'>
								<tr>
									<td width='1%' style='font-size: 9px;color:black;'><b>PASSPORT# :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $passport . "</td>
									<td width='1%' style='font-size: 9px;'><b>PRC# :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $prc . "</td>
									<td width='1%' style='font-size: 9px;'><b>DRIVER'S LICENSE# :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $driver_license . "</td>
								</tr>
								<tr>
									<td width='1%' style='font-size: 9px;'><b>Date of expiration :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $passport_expiration . "</td>
									<td width='1%' style='font-size: 9px;'><b>Date of expiration :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $prc_expiration . "</td>
									<td width='1%' style='font-size: 9px;'><b>Date of expiration :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $driver_license_expiration . "</td>
								</tr>
								<tr>
									<td width='1%' style='font-size: 9px;'><b>TIN# :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $tinno . "</td>
									<td width='1%' style='font-size: 9px;'><b>PAG-IBIG# :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $pagibig . "</td>
									<td width='1%' style='font-size: 9px;'><b>TYPE OF LICENSE :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $driver_license_type . "</td>
								</tr>
								<tr>
									<td width='1%' style='font-size: 9px;'><b>PHILHEALTH :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $philhealth . "</td>
									<td width='1%' style='font-size: 9px;'><b>SSS# :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $sssno . "</td>
									<td width='1%' style='font-size: 9px;'><b>HMO# :</b></td>
									<td width='1%' style='font-size: 9px;'>" . $emp_hmo . "</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' style='background-color: #772b28;'>
					<tr>
						<td>
							<table  style='background-color: white;'>
								";
$info .= "
								<br><br>
								<tr border='1'>
									<th colspan='9' style='font-weight:bold;text-align:left;font-style: italic;font-size: 12px; background-color: #772b28; color:white'>EMPLOYMENT HISTORY</th>
								</tr>
								<tr>
									<th style='font-size: 10px;'>Company Name/Address</th>
									<th style='font-size: 10px;'>Department</th>
									<th style='font-size: 10px;'>Employee Status</th>
									<th style='font-size: 10px;'>Position</th>
									<th style='font-size: 10px;'>Salary in (PHP/Month)</th>
									<th style='font-size: 10px;'>Start Date</th>
									<th style='font-size: 10px;'>Date Resigned</th>
									<th style='font-size: 10px;'>Status</th>
									<th style='color:white;'>qwe</th>
								</tr>
								";
if (count($employment_history) > 0) {
    foreach ($employment_history as $eb) {
        $info .=    "
								<tr>
									<td style='font-size: 9px; text-align:center;'></td>
									<td style='font-size: 9px; text-align:center;'>" . $eb->deptdesc . "</td>
									<td style='font-size: 9px; text-align:center;'>" . $eb->statdesc . "</td>
									<td style='font-size: 9px; text-align:center;'>" . $eb->posdesc . "</td>
									<td style='font-size: 9px; text-align:center;'>" . $eb->salary . "</td>
									<td style='font-size: 9px; text-align:center;'>" . $eb->dateposition . "</td>
									<td style='font-size: 9px; text-align:center;'>" . $eb->dateresigned . "</td>
									<td style='font-size: 9px; text-align:center;'>" . $eb->status . "</td>
									<th style='color:white;'>qwe</th>
								</tr>

							";
    }
}
$info .= "	

							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class='content' style='margin-top:.5cm;'>
				<table style='background-color: #772b28;'>
					<tr>
						<td>
						<h5>PERSONAL RECORD</h5>
							<table style='background-color: white;'>
								<tr>
									<td width='5%' style='font-size: 9px;color:black;'><b>Date of Birth#:</b><span>&nbsp;&nbsp;&nbsp;" . $bdate . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Age:</b><span>&nbsp;&nbsp;&nbsp;" . $age . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Place of Birth:</b><span>&nbsp;&nbsp;&nbsp;" . $bplace . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Blood Type:</b><span>&nbsp;&nbsp;&nbsp;" . $blood_type . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Height(in ft):</b><span>&nbsp;&nbsp;&nbsp;" . $height . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Weight(in lbs):</b><span>&nbsp;&nbsp;&nbsp;" . $weight . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Gender:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->genderdesc($gender) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Nationality:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->nationalitydesc($nationality) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Religion:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->religiondesc($religion) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Civil Status:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->civilstatusdesc($civil_status) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Citezenship:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->citizenshipdesc($citizenship) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Personal Email:</b><span>&nbsp;&nbsp;&nbsp;" . $personal_email . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Mobile:</b><span>&nbsp;&nbsp;&nbsp;" . $mobile . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Landline:</b><span>&nbsp;&nbsp;&nbsp;" . $landline . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Work Email:</b><span>&nbsp;&nbsp;&nbsp;" . $email . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Father's Name:</b><span>&nbsp;&nbsp;&nbsp;" . $father . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Date of Birth:</b><span>&nbsp;&nbsp;&nbsp;" . $fatherbdate . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Occupation:</b><span>&nbsp;&nbsp;&nbsp;" . $fatheroccu . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Mother's Name:</b><span>&nbsp;&nbsp;&nbsp;" . $mother . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Date of Birth:</b><span>&nbsp;&nbsp;&nbsp;" . $motherbdate . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Occupation:</b><span>&nbsp;&nbsp;&nbsp;" . $motheroccu . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px; font-style: italic;'><b>Spouse Details:</b></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Spouse Details/Partner's:</b></td>
									<td width='5%' style='font-size: 9px;'>" . $spouse_fname . "</td>
									<td width='5%' style='font-size: 9px;'>" . $spouse_lname . "</td>
									<td width='5%' style='font-size: 9px;'>" . $spouse_mname . "</td>
									<td width='5%' style='font-size: 9px;'><b>Date of birth:</b><span>&nbsp;&nbsp;&nbsp;" . $spouse_bdate . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='25%' style='font-size: 9px;'><b>Office Name/Address of Spouse/Partner:</b></td>
									<td width='25%' style='font-size: 9px;'>" . $spouse_Address . "</td>
	
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Contact number:</b><span>&nbsp;&nbsp;&nbsp;" . $spouse_contact . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Name of Company:</b><span>&nbsp;&nbsp;&nbsp;" . $spouse_company . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='5%' style='font-size: 9px;'><b>Job Position:</b><span>&nbsp;&nbsp;&nbsp;" . $spouse_job . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
	
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px; font-style:italic'><b>Current Address:</b></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Region:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->regiondesc($regaddr) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='10%' style='font-size: 9px;'><b>House#:</b><span>&nbsp;&nbsp;&nbsp;" . $addr . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Province:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->provincedesc($provaddr) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='10%' style='font-size: 9px;'><b>Barangay:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->barangaydesc($barangay) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Municipality:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->municipalitydesc($cityaddr) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='10%' style='font-size: 9px;'><b>ZipCode:</b><span>&nbsp;&nbsp;&nbsp;" . $zip_code . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px; font-style: italic;'><b>Permanent Address:</b></td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Region:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->regiondesc($permaRegion) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='10%' style='font-size: 9px;'><b>House#:</b><span>&nbsp;&nbsp;&nbsp;" . $permaAddress . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Province:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->provincedesc($permaProvince) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='10%' style='font-size: 9px;'><b>Barangay:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->barangaydesc($permaBarangay) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
								<tr>
									<td width='5%' style='font-size: 9px;'><b>Municipality:</b><span>&nbsp;&nbsp;&nbsp;" . $this->extras->municipalitydesc($permaMunicipality) . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
									<td width='10%' style='font-size: 9px;'><b>ZipCode:</b><span>&nbsp;&nbsp;&nbsp;" . $permaZipcode . "</span></td>
									<td width='5%' style='font-size: 9px;color:white;'>citu</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1'  style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr border='1'>
						<th colspan='7' style='font-weight:bold;text-align:left;font-size: 12px; background-color: #772b28; color:white'>FAMILY MEMBERS</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Name</th>
						<th style='font-size: 9px;'>Relation</th>
						<th style='font-size: 9px;'>Date of Birth</th>
						<th style='font-size: 9px;'>Age</th>
						<th style='font-size: 9px;'>Gender</th>
						<th style='font-size: 9px;'>Occupation</th>
						<th style='font-size: 9px;'>Status</th>
					</tr>
				";
if (count($employee_family) > 0) {
    foreach ($employee_family as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->name . "</td>
						<td style='font-size: 9px;'>" . $eb->relation . "</td>
						<td style='font-size: 9px;'>" . $eb->bdate . "</td>
						<td style='font-size: 9px;'>" . $eb->age . "</td>
						<td style='font-size: 9px;'>" . (($eb->gender == 'M') ? 'Male' : 'Female') . "</td>
						<td style='font-size: 9px;'>" . $eb->occupation . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>

				";
    }
}
$info .= "	</table>
			</div>
			<div class='content' style='margin-top:.5cm;display:none;'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='8' style='font-weight:bold;font-size: 12px;text-align:left; background-color: #772b28; color:white'>CHILDREN :</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Name</th>
						<th style='font-size: 9px;'>Gender</th>
						<th style='font-size: 9px;'>Birth Order #</th>
						<th style='font-size: 9px;'>Date of Birth</th>
						<th style='font-size: 9px;'>Age</th>
					</tr>
				";
if (count($employee_children) > 0) {
    foreach ($employee_children as $eb) {
        $info .=    "
					<tr>
						<td style='text-align:left; font-size: 9px;'>" . $eb->name . "</td>
						<td style='font-size: 9px;'>" . $eb->gender . "</td>
						<td style='font-size: 9px;'>" . $eb->birthorder . "</td>
						<td style='font-size: 9px;'>" . $eb->birthdate . "</td>
						<td style='font-size: 9px;'>" . $eb->age . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='8' style='font-weight:bold;font-size: 12px;text-align:left;background-color: #772b28; color:white'>EMERGENCY CONTACT INFORMATION</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Name</th>
						<th style='font-size: 9px;'>Relation</th>
						<th style='font-size: 9px;'>Address</th>
						<th style='font-size: 9px;'>Mobile #</th>
						<th style='font-size: 9px;'>Home #</th>
						<th style='font-size: 9px;'>Office #</th>
						<th style='font-size: 9px;'>Emergency type#</th>
						<th style='font-size: 9px;'> Data Approval Status</th>
					</tr>
				";
if (count($employee_emergencyContact) > 0) {
    foreach ($employee_emergencyContact as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->name . "</td>
						<td style='font-size: 9px;'>" . $eb->relation . "</td>
						<td style='font-size: 9px;'>" . $eb->add . "</td>
						<td style='font-size: 9px;'>" . $eb->mobile . "</td>
						<td style='font-size: 9px;'>" . $eb->homeNo . "</td>
						<td style='font-size: 9px;'>" . $eb->officeNo . "</td>
						<td style='font-size: 9px;'>" . $eb->level . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>	
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='7' style='font-weight:bold;font-size: 12px;text-align:left; background-color: #772b28; color:white'>EDUCATIONAL BACKGROUND</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>School/Address</th>
						<th style='font-size: 9px;'>Educational Level</th>
						<th style='font-size: 9px;'>Course</th>
						<th style='font-size: 9px;'>Units Earned</th>
						<th style='font-size: 9px;'>School Year Graduated</th>
						<th style='font-size: 9px;'>Honor Recived</th>
						<th style='font-size: 9px;'>Date Approval Status</th>
					</tr>
				";
if (count($educational_background) > 0) {
    foreach ($educational_background as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->school . "</td>
						<td style='font-size: 9px;'>" . $eb->educ_level . "</td>
						<td style='font-size: 9px;'>" . $eb->course . "</td>
						<td style='font-size: 9px;'>" . $eb->units . "</td>
						<td style='font-size: 9px;'>" . $eb->date_graduated . "</td>
						<td style='font-size: 9px;'>" . $eb->honor_received . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='6' style='font-weight:bold;font-size: 12px;text-align:left; background-color: #772b28; color:white'>GOVERNMENT EXAMINATIONS TAKEN/LICENSES </th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Name of Exam</th>
						<th style='font-size: 9px;'>License No.</th>
						<th style='font-size: 9px;'>Date/Place Taken</th>
						<th style='font-size: 9px;'>Expiration Date</th>
						<th style='font-size: 9px;'>Rating</th>
						<th style='font-size: 9px;'>Date APproval Status</th>
					</tr>
				";
if (count($eligibilities) > 0) {
    foreach ($eligibilities as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->level . "</td>
						<td style='font-size: 9px;'>" . $eb->license_number . "</td>
						<td style='font-size: 9px;'>" . $eb->date_issued . "</td>
						<td style='font-size: 9px;'>" . $eb->date_expired . "</td>
						<td style='font-size: 9px;'>" . $eb->remarks . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='4' style='font-weight:bold;font-size: 12px;text-align:left; background-color: #772b28; color:white'>LANGUAGES</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Language</th>
						<th style='font-size: 9px;'>Literacy</th>
						<th style='font-size: 9px;'>Fluency</th>
						<th style='font-size: 9px;'>Date Approval Status</th>
					</tr>
				";
if (count($Language) > 0) {
    foreach ($Language as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->language . "</td>
						<td style='font-size: 9px;'>" . $eb->literacy . "</td>
						<td style='font-size: 9px;'>" . $eb->fluency . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='4' style='font-weight:bold;font-size: 12px;text-align:left; background-color: #772b28; color:white'>SKILLS</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Skills</th>
						<th style='font-size: 9px;'>Years of use</th>
						<th style='font-size: 9px;'>Level of Experties</th>
						<th style='font-size: 9px;'>Data Approval Statud</th>
					</tr>
				";
if (count($employee_skill) > 0) {
    foreach ($employee_skill as $wh) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $wh->skills . "</td>
						<td style='font-size: 9px;'>" . $wh->timestamp . "</td>
						<td style='font-size: 9px;'>" . $wh->level . "</td>
						<td style='font-size: 9px;'>" . $wh->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='6' style='font-weight:bold;font-size: 12px;text-align:left;background-color: #772b28; color:white'>RESEARCH UNDERTAKEN</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Type of Research Work</th>
						<th style='font-size: 9px;'>Sponsoring Agency</th>
						<th style='font-size: 9px;'>Date/Place Undertaken </th>
						<th style='font-size: 9px;'>Published </th>
						<th style='font-size: 9px;'>Unpublished </th>
						<th style='font-size: 9px;'>Data Approval Status </th>
					</tr>
				";
if (count($pgd) > 0) {
    foreach ($pgd as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->level . "</td>
						<td style='font-size: 9px;'>" . $eb->title . "</td>
						<td style='font-size: 9px;'>" . $eb->publisher . "</td>
						<td style='font-size: 9px;'>" . $eb->datef . "</td>
						<td style='font-size: 9px;'>" . $eb->type . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='4' style='font-weight:bold;font-size: 12px;text-align:left;background-color: #772b28; color:white'>AWARDS/CITATIONS/RECOGNITION</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Award/Citations</th>
						<th style='font-size: 9px;'>Granting Agency/Org</th>
						<th style='font-size: 9px;'>Date/Place</th>
						<th style='font-size: 9px;'>Status</th>
					</tr>
				";
if (count($ar) > 0) {
    foreach ($ar as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->level . "</td>
						<td style='font-size: 9px;'>" . $eb->institution . "</td>
						<td style='font-size: 9px;'>" . $eb->datef . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='6' style='font-weight:bold;font-size: 12px;text-align:left;background-color: #772b28; color:white'>GROUP AFFILIATIONS</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Name of Organization</th>
						<th style='font-size: 9px;'>Office Address</th>
						<th style='font-size: 9px;'>Position</th>
						<th style='font-size: 9px;'>From</th>
						<th style='font-size: 9px;'>To</th>
						<th style='font-size: 9px;'>Status</th>
					</tr>
				";
if (count($scho) > 0) {
    foreach ($scho as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->level . "</td>
						<td style='font-size: 9px;'>" . $eb->gr_agency . "</td>
						<td style='font-size: 9px;'>" . $eb->prog_study . "</td>
						<td style='font-size: 9px;'>" . $eb->datef . "</td>
						<td style='font-size: 9px;'>" . $eb->dateto . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>

			<div class='content' style='margin-top:.5cm'>
				<table width='100%' border='1' style='text-align:center;border-collapse:collapse;font-size: 12px;page-break-inside:avoid'>
					<tr>
						<th colspan='5' style='font-weight:bold;font-size: 12px;text-align:left;background-color: #772b28; color:white'>CHARACTER REFFERENCES</th>
					</tr>
					<tr>
						<th style='font-size: 9px;'>Name</th>
						<th style='font-size: 9px;'>Position</th>
						<th style='font-size: 9px;'>Address</th>
						<th style='font-size: 9px;'>Contact Number</th>
						<th style='font-size: 9px;'>Date Approval Status</th>
					</tr>
				";
if (count($char) > 0) {
    foreach ($char as $eb) {
        $info .=    "
					<tr>
						<td style='font-size: 9px;'>" . $eb->char_name . "</td>
						<td style='font-size: 9px;'>" . $eb->position . "</td>
						<td style='font-size: 9px;'>" . $eb->address . "</td>
						<td style='font-size: 9px;'>" . $eb->contact_number . "</td>
						<td style='font-size: 9px;'>" . $eb->status . "</td>
					</tr>
				";
    }
}
$info .= "	</table>
			</div>
			
	";

$pdf->WriteHTML($info);

$pdf->Output($reportName . '.pdf', 'I');
