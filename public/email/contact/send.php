<?php

require_once '../lib/PHPMailer.php';

function init(){

	// conn database
	$host       = 'portal-mj.mysql.uhserver.com';
    $db         = 'portal_mj';
    $user       = 'at_portal_mj';
    $pass       = 'AtPortalMj@1';

    // posts form
	$name       = isset($_POST['name']) ? addslashes(strip_tags($_POST['name'])) : 'teste';
    $email      = isset($_POST['email']) ? addslashes(strip_tags($_POST['email'])) : 'teste@teste.com';
    $phone      = isset($_POST['phone']) ? addslashes(strip_tags($_POST['phone'])) : '34213657';
    $genre      = isset($_POST['genre']) ? addslashes(strip_tags($_POST['genre'])) : 'masculino';
    $state      = isset($_POST['state']) ? addslashes(strip_tags($_POST['state'])) : 'PE';
    $subject    = isset($_POST['subject']) ? addslashes(strip_tags($_POST['subject'])) : 'assunto';
    $message    = isset($_POST['message']) ? addslashes(strip_tags($_POST['message'])) : 'mensagem';

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
	$body 		= body($name, $email, $phone, $genre, $state, $subject, $message);

	//save($host, $db, $user, $pass, $name, $email, $phone, $genre, $state, $subject, $message);
	send($host_email, $user_email, $pass_email, $port_email, $sec_email, $from, $fromName, $toName, $to, $subject, $body);

	echo json_encode(array('result' => TRUE, 'feedback' => 'success'));

}

function save($host, $db, $user, $pass, $name, $email, $phone, $genre, $state, $subject, $message){

    try {

        $pdo = new PDO ( "mysql:host=".$host.";dbname=".$db."", $user, $pass );

        $stmt = $pdo->prepare("INSERT INTO ws_contact_us_form (name, email, phone, genre, state, subject, message) VALUES ('".$name."', '".$email."', '".$phone."', '".$genre."', '".$state."', '".$subject."', '".$message."')");
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

function body($name, $email, $phone, $genre, $state, $subject, $message){

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
								<td>".$name."</td>
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
								<td>".$genre."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>UF:</b></font></td>
								<td>".$state."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Assunto:</b></font></td>
								<td>".$subject."</td>
							</tr>

							<tr>
								<td><font type='Arial, Verdana, Tahoma, sans-serif' size='2'><b>Mensagem:</b></font></td>
								<td>".$message."</td>
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