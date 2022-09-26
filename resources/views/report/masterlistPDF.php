<?php

$pdf = new \Mpdf\Mpdf(array('mode' => 'utf-8','format' => 'LETTER-L', 'orientation' => 'P'));
$pdf->SetTitle('Master List Report');

$info  = "  <style>
                @page{            
                    /*margin-top: 4.35cm;*/
                    margin-top: 3.15cm;
                    odd-header-name: html_Header;
                    odd-footer-name: html_Footer;
                }
                th{
                	color: white;
                }  
                .content{
                    height: 100%;
                    margin-top: 15px;
                }
                table{
                    border-collapse: collapse;
                    font-size: 12px;
                    border-spacing: 5px;
                }
                .content-header{
                    text-align: center;
                    font-size: 12px;
                }
                .content-body{
                    border: 1px solid black;
                    padding-top: 8px;
                    padding-bottom: 8px;
                    padding-left: 8px;
                }

			    .footer{
			    	width: 100%;
			    	text-align: right;
			    }
            </style>";
$info .= "
<htmlpageheader name='Header'>
    <div>
        <table width='60%'  >
            <tr>
                <td rowspan='3' style='text-align: right;' width='60%'><img src='images/logo.png' style='width: 60px;text-align: center;' /></td>
                <td valign='middle' width='90%' style='padding: 0;text-align: center;' width='45%'><span style='font-size: 13px;'><b>KINGS MANPOWER SERVICES</b></span></td>
            </tr>
            <tr>
                <td valign='middle' style='padding: 0;text-align: center;'><span style='font-size: 13px;' width='45%'><strong>Envision and achieve an optimum goal
</strong></span></td>
            </tr>
            <tr>
                <td valign='middle' style='padding: 0;text-align: center;'><span style='font-size: 13px;' width='45%'><strong>Master List Report</strong></span></td>
            </tr>
        </table>
    </div>
</htmlpageheader>";
$info .= "

<div class='content'>
    <div class='content-header'>
        <table border=1 width='100%' style='font-size: 9px;' id='datas'>
            <thead>
            <tr style='background-color: black;'>
            <th style='padding: 5px;text-align: center;font-size: 20px;font-weight: bold;'>APPLICANT ID</th>
            <th style='padding: 5px;text-align: center;font-size: 20px;font-weight: bold;'>ER REF</th>
            <th style='padding: 5px;text-align: center;font-size: 20px;font-weight: bold;'>MAID REF</th>
            <th style='padding: 5px;text-align: center;font-size: 20px;font-weight: bold;'>NAME</th>
            <th style='padding: 5px;text-align: center;font-size: 20px;font-weight: bold;'>Image</th>
            ";
$info .= "</thead>";
$info .= "<tbody>";
            foreach($result as $value){
                    $info .= "<tr>
                            <td style='padding: 2px;text-align: center;font-size: 13px;'>".$value->applicant_id."</td>
                            <td style='padding: 2px;text-align: center;font-size: 13px;'>".$value->er_ref."</td>
                            <td style='padding: 2px;text-align: center;font-size: 13px;'>".$value->maid_ref."</td>
                            <td style='padding: 2px;text-align: center;font-size: 13px;'>".$value->fname. " " . $value->mname . " ". $value->lname."</td>
                            <td style='padding: 2px;text-align: center;font-size: 13px;'><img src='".$value->user_profile_face."' style='width: 60px;text-align: center;' /></td>";
                        
$info .= "</tr>";
}
$info .= "      
            </tbody>
        </table>
    </div>
</div>";
$info .= "
	<htmlpagefooter name='Footer'>
		<br>
		<div class='footer'>
			Page : {PAGENO} of {nb}
		</div>
	</htmlpagefooter>
";
$pdf->WriteHTML($info);

$pdf->Output('User List Report .pdf', 'I');
?>



