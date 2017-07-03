<?php

require_once '../lib/PHPMailer.php';

function init(){

	// conn database
	$host       = 'portal-mj.mysql.uhserver.com';
    $db         = 'portal_mj';
    $user       = 'at_portal_mj';
    $pass       = 'AtPortalMj@1';

    // posts form
	$company_name     	= isset($_POST['company_name']) ? addslashes(strip_tags($_POST['company_name'])) : 'company_name';
	$occupation_area    = isset($_POST['occupation_area']) ? addslashes(strip_tags($_POST['occupation_area'])) : 'occupation_area';
	$contact_name    	= isset($_POST['contact_name']) ? addslashes(strip_tags($_POST['contact_name'])) : 'contact_name';
	$office    			= isset($_POST['office']) ? addslashes(strip_tags($_POST['office'])) : 'office';
    $email      		= isset($_POST['email']) ? addslashes(strip_tags($_POST['email'])) : 'teste@teste.com';
    $phone      		= isset($_POST['phone']) ? addslashes(strip_tags($_POST['phone'])) : '34213657';
    $branch      		= isset($_POST['branch']) ? addslashes(strip_tags($_POST['branch'])) : 'masculino';
    $country    		= isset($_POST['country']) ? addslashes(strip_tags($_POST['country'])) : 'mensagem';
    $state      		= isset($_POST['state']) ? addslashes(strip_tags($_POST['state'])) : 'PE';
    $subject    		= isset($_POST['subject']) ? addslashes(strip_tags($_POST['subject'])) : 'assunto';
    $city    			= isset($_POST['city']) ? addslashes(strip_tags($_POST['city'])) : 'city';
    $address    		= isset($_POST['address']) ? addslashes(strip_tags($_POST['address'])) : 'address';

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
	$body 		= body($company_name, $occupation_area, $contact_name, $office, $email, $phone, $branch, $state, $subject, $country, $city, $address);

	//save($host, $db, $user, $pass, $company_name, $occupation_area, $contact_name, $office, $email, $phone, $branch, $state, $subject, $country, $city, $address);
	send($host_email, $user_email, $pass_email, $port_email, $sec_email, $from, $fromName, $toName, $to, $subject, $body);

	echo json_encode(array('result' => TRUE, 'feedback' => 'success'));

}

function save($host, $db, $user, $pass, $company_name, $occupation_area, $contact_name, $office, $email, $phone, $branch, $state, $subject, $country, $city, $address){

    try {

        $pdo = new PDO ( "mysql:host=".$host.";dbname=".$db."", $user, $pass );

        $stmt = $pdo->prepare("INSERT INTO ws_new_business_form (company_name, occupation_area, contact_name, office, email, phone, branch, state, subject, country, city, address) VALUES ('".$company_name."', '".$occupation_area."', '".$contact_name."', '".$office."', '".$email."', '".$phone."', '".$branch."', '".$state."', '".$subject."', '".$country."', '".$city."', '".$address."')");
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

function body($company_name, $occupation_area, $contact_name, $office, $email, $phone, $branch, $state, $subject, $country, $city, $address){

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
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Nome da Empresa:</b></font></td>
								<td>".$company_name."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Área de atuação:</b></font></td>
								<td>".$occupation_area."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Nome do Contato:</b></font></td>
								<td>".$contact_name."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Cargo:</b></font></td>
								<td>".$office."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Email:</b></font></td>
								<td>".$email."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Telefone:</b></font></td>
								<td>".$phone."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Gênero:</b></font></td>
								<td>".$branch."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Mensagem:</b></font></td>
								<td>".$country."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Cidade:</b></font></td>
								<td>".$city."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>UF:</b></font></td>
								<td>".$state."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Endereço:</b></font></td>
								<td>".$address."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Assunto:</b></font></td>
								<td>".$subject."</td>
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