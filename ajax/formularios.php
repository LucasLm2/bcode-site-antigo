<?php 
	include('../config.php');
	include('../Email.php');
	try {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];

		$data = array();
		$assunto = 'Mensagem do Site';

		$corpo = '';
		$corpo.="Nome: ".$nome;
		$corpo.="email: ".$email;
		$corpo.="Mensagem: ".$mensagem;
		
		$info = array('assunto' => $assunto, 'corpo' => $corpo);
		$mail = new Email('nspro36.hostgator.com.br','contato@bcode.com.br'.'Ruth5822!', 'contato@bcode.com.br');
		$mail->addAdress($email,$nome);
		$mail->formatarEmail($info);
		$mail->enviarEmail(); 
		$data['status'] = 'sucesso';
	} catch (Exception $e) {
		echo $e->getMessage();
		$data['status'] = 'erro';
	} finally {
    	die(json_encode($data));
	}
?>