<?php

require_once '../lib/PHPMailer.php';

function init(){

	// conn database
	$host       = 'portal-mj.mysql.uhserver.com';
    $db         = 'portal_mj';
    $user       = 'at_portal_mj';
    $pass       = 'AtPortalMj@1';

    // posts form
	$name_rapporteur       		= isset($_POST['name_rapporteur']) ? addslashes(strip_tags($_POST['name_rapporteur'])) : '';
    $phone      				= isset($_POST['phone']) ? addslashes(strip_tags($_POST['phone'])) : '';
    $mobile      				= isset($_POST['mobile']) ? addslashes(strip_tags($_POST['mobile'])) : '';
    $patient_name      			= isset($_POST['patient_name']) ? addslashes(strip_tags($_POST['patient_name'])) : '';
    $medicine      				= isset($_POST['medicine']) ? addslashes(strip_tags($_POST['medicine'])) : '';
    $event_text      			= isset($_POST['event_text']) ? addslashes(strip_tags($_POST['event_text'])) : '';
    $information_authorization	= isset($_POST['information_authorization']) ? addslashes(strip_tags($_POST['information_authorization'])) : '';

    $subject    = 'Farmacogil�ncia';

    // conn email data
    $host_email = 'smtp.apptecbr.com';
    $user_email = 'teste@apptecbr.com';
    $pass_email = 'Apptec@135';
    $port_email = '587';
    $sec_email  = 'tls';

    // email send
	$from 		= 'teste@apptecbr.com';
	$fromName 	= 'Teste';
	$to 		= 'rgregor210881@outlook.com';
	$toName 	= 'Rodrigo';
	$subject 	= 'Contato Portal Marjan';
	$body 		= body($name_rapporteur, $phone, $mobile, $patient_name, $medicine, $event_text, $information_authorization);

	//save($host, $db, $user, $pass, $name_rapporteur, $phone, $mobile, $patient_name, $medicine, $event_text, $information_authorization);

	send($host_email, $user_email, $pass_email, $port_email, $sec_email, $from, $fromName, $toName, $to, $subject, $body);

	echo json_encode(array('result' => TRUE, 'feedback' => 'success'));

}

function save($host, $db, $user, $pass, $name_rapporteur, $phone, $mobile, $patient_name, $medicine, $event_text, $information_authorization){

    try {

        $pdo = new PDO ( "mysql:host=".$host.";dbname=".$db."", $user, $pass );

        $stmt = $pdo->prepare("INSERT INTO ws_pharmacovigilance_form_normal (name_rapporteur, phone, mobile, patient_name, medicine, event_text, information_authorization) VALUES ('".$name_rapporteur."', '".$phone."', '".$mobile."', '".$patient_name."', '".$medicine."', '".$event_text."', '".$information_authorization."')");

        $stmt->execute();

        $pdo = null;

    } catch ( PDOException $e ) {
        echo $e->getMessage ();
    }


}

function send($host_email, $user_email, $pass_email, $port_email, $sec_email, $from, $fromName, $toName, $to, $subject, $body, $reply=""){

	if($_SERVER['SERVER_NAME'] != "localhost"){

		if(empty($reply)){
			$reply = $from;
		}

		$mail = new PHPMailer();

		$mail->IsSMTP();
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;

		$mail->Host       = $host_email;
		$mail->Port       = $port_email;
		//$mail->SMTPSecure = $sec_email;
		$mail->Mailer = "smtp";

		$mail->Username   = $user_email;
		$mail->Password   = $pass_email;

		$mail->CharSet = "UTF-8";
		$mail->From = $from;
		$mail->FromName = $fromName;
		$mail->AddReplyTo($reply, $fromName);
		$mail->AddAddress($to);

	    //$mail->AddBCC("andre.ninoff@gmail.com");

		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $body;

		if(!$mail->Send()){
			echo "<pre>"; var_dump($mail->ErrorInfo); die();
		}

	}

}

function body($name_rapporteur, $phone, $mobile, $patient_name, $medicine, $event_text, $information_authorization){

	$body = "<!DOCTYPE html>
			   <html>
				<head>
					<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
					<title>Site</title>
					<style>
						a {text-decoration:none;}
					</style>
				</head>
				<body style='border: 0px; margin: 0px; padding: 0px; background-color: #fff; color:#000;'>

					<center>
						<br/><br/>
						<table id='table01' width='460' border='0' cellpadding='0' cellspacing='0' align='center'>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Nome:</b></font></td>
								<td>".$name_rapporteur."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Telefone:</b></font></td>
								<td>".$phone."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Celular:</b></font></td>
								<td>".$mobile."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Nome ou iniciais:</b></font></td>
								<td>".$patient_name."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Medicamento:</b></font></td>
								<td>".$medicine."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Descri��o do evento:</b></font></td>
								<td>".$event_text."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Autoriza��o:</b></font></td>
								<td>".$information_authorization."</td>
							</tr>

						</table>
					</center>

				</body>
				</html>";

		return $body;

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	init();
}