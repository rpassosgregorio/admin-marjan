<?php

class SendEmail_model extends MY_Model {

	public function __construct(){
    	parent::__construct();
	}

	public function send_email($from_email, $from_name, $to_email, $to_name, $subject, $message, $reply_name = '', $reply_mmail = '', $bcc = array()){

		$config['protocol'] = 'smtp';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$config['smtp_host'] = 'host-server';
		$config['smtp_user'] = 'user-server';
		$config['smtp_pass'] = 'pass-user-server';
		$config['smtp_port'] = 'port-server';

		$this->email->initialize($config);

		$this->email->from($from_email, $from_name);
		$this->email->to($to_email, $to_name);

		//$this->email->cc('andre@grafikonstruct.com.br');

		if(is_array($bcc) && !empty($bcc)){

			for($i = 0; $i < count($bcc['mail']); $i++){
				$this->email->bcc($bcc['mail'][$i], $bcc['name'][$i]);
			}

		}

		$this->email->subject($subject);
		$this->email->message($message);

		if(!$this->email->send()){

			$this->email->print_debugger();

		}

	}

	public function body_header(){

		$body = '<html>
					<head>
					<title>SITE</title>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					<style>
						* {margin: 0; padding: 0;}
						img {display: block; border: 0;}
						a {text-decoration: none;}
					</style>
					</head>
					<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

						<table id="Table_01" width="650" style="margin:0 auto;" border="0" cellpadding="0" cellspacing="0">

							<tr><td height="20">&nbsp;</td></tr>

							<tr>
								<td align="center">
									<a href="http://www.site.com">
										<img src="http://site.com.br/email/images/logo.png" alt="SITE" width="202" height="53">
									</a>
								</td>
							</tr>

							<tr><td height="20">&nbsp;</td></tr>


							<tr>
								<td>
									<img src="http://site.com.br/email/images/header-content.png" alt="" width="650" height="85" style="display: block; border: 0;">
								</td>
							</tr>';

		return $body;

	}

	public function body_footer(){

		$body = '<tr>
					<td>
						<img src="http://site.com.br/email/images/footer-content.png" alt="" width="650" height="215" style="display: block; border: 0;">
					</td>
				</tr>

			</table>
		</body>
		</html>';

		return $body;

	}

	public function body_forget_password(){

		$body = $this->body_header();

		$body .= '';

		$body .= $this->body_footer();


		return $body;


	}


}

?>