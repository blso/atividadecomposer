<?php 	
require_once 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Respect\Validation\Validator as v;

$nasc = $_POST['nasc'];

$email = $_POST['email'];

$vNasc = v::date()->validate($nasc); // true
$vEmail = v::email()->validate($email);


if (!$vNasc) {
	echo "erro na data de nascimento";
	exit();
	// echo "concluido com sucesso ".$nasc.'<br>';
}


if (!$vEmail) {
	echo "erro no email";
	exit();
}

$v = "nascimento ".$nasc. "email ".$email;
// var_dump($vNasc, $vEmail);

 $qrCode = new QrCode($v);

 header('Content-Type: '.$qrCode->getContentType());
 echo $qrCode->writeString();



 ?>

