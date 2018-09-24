<?php 	
require_once 'vendor/autoload.php';

use Endroid\QrCode\QrCode;

$qr = $_POST['nome'];

$qrCode = new QrCode($qr);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();



 ?>

