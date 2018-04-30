<?php

$name = $_POST['mice_realname'];
$kurumAdi = $_POST['mice-kurumadi'];
$telef = $_POST['mice_telno'];
$email = $_POST['mice_email'];
$kisiSayisi = $_POST['mice-kisisayisi'];
$baslangicTarihi = $_POST['mice-baslangictarihi'];
$bitisTarihi = $_POST['mice-bitistatihi'];
$notlar = $_POST['mice-notlar'];
$guvenlik = $_POST['mice-guvenlik'];
$temizlik = $_POST['mice-temizlik'];
$hostHostes = $_POST['mice-host-hostes'];
$simultane = $_POST['mice-simultane'];
$vipBuisness = $_POST['mice-vip-buisness-center'];
$workshopSekreterya = $_POST['mice-workshop-sekreterya'];

$from = 'melih-organizasyon formu'; 
$to = 'melih@tatilsitesi.com, melihsahinkesen@gmail.com, kaan@logocum.net'; 
$subject = 'Organizasyon talep formu dolduruldu';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";





$body = "<strong>$from</strong><br><br> <strong>İsim:</strong> $name<br> <strong>Kurum Adı:</strong> $kurumAdi<br> <strong>Telefon numarası:</strong> $telef<br> <strong>E-mail:</strong> $email<br> <strong>Kişi sayısı:</strong> $kisiSayisi<br> <strong>Başlangıç tarihi:</strong> $baslangicTarihi<br> <strong>Bitiş tarihi:</strong> $bitisTarihi<br> <strong>Müşteri notu:</strong> $notlar<br> <strong>Güvenlik:</strong> $guvenlik<br> <strong>Temizlik:</strong> $temizlik<br> <strong>Host Hostes:</strong> $hostHostes<br> <strong>Simultane:</strong> $simultane<br> <strong>VIP Buisness center:</strong> $vipBuisness<br> <strong>Workshop / Sekreterya:</strong> $workshopSekreterya<br> ";

if ($_POST['submit']) {
	if ($name != '' && $telef != '') {       
		if (mail ($to, $subject, $body, $headers)) { 
			header('Location: ../form-gonderildi.php');
		} else { 
			header('Location: ../form-gonderilemedi.php'); 
	  } 

	} else {
			header('Location: ../form-eksik.php');
	}
}

?>