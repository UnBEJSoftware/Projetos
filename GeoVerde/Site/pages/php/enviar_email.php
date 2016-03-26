<?php
   
    $nome=$_REQUEST['nome'];
    $email=$_REQUEST['email'];
    $mensagem=$_REQUEST['mensagem'];
	
    $to;
	$subject = "Mensagem do Website da GeoVerde";
	
	$message = '
	<html>
	<head>
	<title>Geoverde - Engenharia Ambiental</title>
	</head>
	<body style="font-family:Arial;color:#333;">
	<div style="width:960px;height:auto;margin:0 auto;">
	  <h2>E-mail enviado do Website da GeoVerde:</h2>
	  <p></p>
	  <p><span style="font-weight:bold;">Nome:&nbsp;&nbsp;</span>'.$nome.'</p>
	  <p><span style="font-weight:bold;">E-mail:&nbsp;&nbsp;</span>'.$email.'</p>
	  <p><span style="font-weight:bold;">Mensagem:&nbsp;&nbsp;</span>'.$mensagem.'</p>
	</div>
	</body>
	</html>
	';
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	/*$headers .= 'From: <webmaster@example.com>' . "\r\n";
	$headers .= 'Cc: myboss@example.com' . "\r\n";*/
	
	mail("bbraganca1991@gmail.com",$subject,$message,$headers);

    
	echo '<script type="text/javascript">location.href="contato.html"; alert("Mensagem enviada com sucesso!");</script>';

?>