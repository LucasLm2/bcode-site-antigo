<?php
	require_once('config.php');

	try {
		if(isset($_POST['nome'])){
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = "";
			$mail->Port = 465; // or 587
			$mail->IsHTML(true);
			$mail->Username = "";
			$mail->Password = "";
			$mail->SetFrom($_POST['email']);
			$mail->Subject = "Formulário de contato Site";
			$mail->Body = 'Nome: '.$_POST['nome'].'<hr>Mensagem: '.$_POST['mensagem'];
			$mail->AddAddress("","");
			if(!$mail->Send()) {
				$data['status'] = 'erro';
			} else {
				$data['status'] = 'sucesso';
			}
		} else {
			$data['status'] = 'erro';
		}
			
	} catch (Exception $e) {
		$data['status'] = 'erro';
	} finally {
    	die(json_encode($data));
	}
	
?>