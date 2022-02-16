$body = "<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">\r\n
                  <head>\r\n
                    <title>Creative Brief</title>\r\n
                  </head>\r\n
                  <body>\r\n";
        $body .="<table width='650' border='0' align='center' cellpadding='0' cellspacing='0' style='background:#ffffff;border:#f6f6f6 4px solid;'>
                <tbody>
                    <tr>
                        <td align='center' valign='top'>
                            <table width='650' border='0' align='center' cellpadding='0' cellspacing='0'>
                                <tbody>
                                    <tr>
                                        <td align='center' valign='top' bgcolor='#131211'>
                                        <table width='80' border='0' cellspacing='0' cellpadding='0'>
                                            <tbody>
                                                <tr><td height='10' align='center' valign='top'></td></tr>
                                                <tr><td align='center' valign='top'><img src='https://www.crafticlogo.com/assets/images/logo-c.gif' alt='downtowndesignservices.com' width='238' height='56'></td></tr>
                                                <tr><td height='10' align='center' valign='top'></td></tr>
                                            </tbody>
                                        </table>
                                        </td>
                                     </tr>
                                     <tr><td height='5' align='center' valign='middle' bgcolor='#0c0830'></td></tr>
                                </tbody>
                            </table>
                        </td>
                     </tr>
                     <tr>
                        <td width='620' align='center' valign='top'>
                            <table width='596' border='0' align='center' cellpadding='0' cellspacing='0' style='font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;'>
                                <tbody>
                                    <tr><td height='20' align='center' valign='middle'></td></tr>
                                    <tr><td height='20' align='left' valign='middle'></td></tr>
                                    <tr><td height='73' align='left' valign='middle'>
                                        <span style='font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif;'>Dear Admin,</span>
                                        <p><b>Creative Brief ID: </b> " . $cbid . " </p>
                                        <p><b>Contact Person Name: </b>" . $full_name . "</p>
                                        <p><b>Contact Email Address: </b>" . $person_mail . "</p>
                                        <p><b>Logo Name: </b>" . $company_name . "</p>
                                        <p><b>Company Slogan: </b>" . $company_slogan . "</p>
                                        <p><b>Industry: </b>" . $industry . "</p>
                                        <p><b>Competitors Reference: </b>" . $competitor_reference . "</p>
                                        <p><b>Describe your business: </b>" . $describe_your_business . "</p>
                                        <p><b>What you want in your logo: </b>" . $additional_details . "</p>
                                        <p><b>Logo Color: </b>" . $primary_color . "</p>
                                        <p><b>Custom Primary Color: </b>" . $primary_color . "</p>
                                        <p><b>Custom Secondary Color: </b>" . $secondary_color . "</p>
                                        <p><b>Select Typography: </b>" . $typography . "</p>
                                        <p><b>Select Logo Type: </b>" . $logo_type . "</p>
                                        <p><b>Personal Phone: </b>" . $person_phone . "</p>
                                        <p><b>Company Phone: </b>" . $person_phone_off . "</p>
                                        ".$attachment_data."
                                        </td></tr>
                                    <tr><td height='20' align='left' valign='middle'>&nbsp;</td></tr>
                                </tbody>
                            </table>
                        </td>
                     </tr>
                     <tr><td align='center' valign='middle'></td></tr>
                     <tr><td height='98' valign='middle' bgcolor='#f6f6f6'>
                        <table width='596' border='0' align='center' cellpadding='0' cellspacing='0' style='font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;'>
                            <tbody>
                                <tr><td width='574' height='73' align='left' valign='middle'><span style='font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif;'>Thank you<br>Customer Care Department<br>Craftic Logo Services</span></td></tr>
                            </tbody>
                        </table>
                     </td>
                    </tr>
                </tbody>
            </table>";

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP(); 
        	$mail->SMTPAuth = true; 
        	$mail->SMTPSecure = 'tls'; 
        	$mail->Host = "smtp.gmail.com";
        	$mail->Port = 587; 
        	$mail->IsHTML(true);
        	$mail->CharSet = 'UTF-8';
        	$mail->Username = "example@gmail.com";
        	$mail->Password = "email_password";
        	$mail->SetFrom("digiliatebrands@gmail.com");
        	$mail->Subject = "Crafticlogo  (Logo Brief Form)";
        	$mail->Body = $body;


$mail->AddAddress("wheretosend@to.com");

$mail->SMTPOptions=array('ssl'=>array(
        		'verify_peer'=>false,
        		'verify_peer_name'=>false,
        		'allow_self_signed'=>false
        	));
        	
        	if($mail->Send()){
            }