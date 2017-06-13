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


require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "smtp.yandex.com.tr"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "testmelih@yandex.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "test9966"; // Mail adresimizin sifresi
$mail->SetFrom("testmelih@yandex.com", "Form Testleri"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress("melih@tatilsitesi.com"); // Mailin gönderileceği alıcı adres
//$mail->AddCC('kaan@logocum.net');
//$mail->AddCC('info@logocum.net');
$mail->Subject = "Clean - Organizasyon talep formu dolduruldu"; // Email konu başlığı
$mail->Body = "<strong>$from</strong><br><br> <strong>İsim:</strong> $name<br> <strong>Kurum Adı:</strong> $kurumAdi<br> <strong>Telefon numarası:</strong> $telef<br> <strong>E-mail:</strong> $email<br> <strong>Kişi sayısı:</strong> $kisiSayisi<br> <strong>Başlangıç tarihi:</strong> $baslangicTarihi<br> <strong>Bitiş tarihi:</strong> $bitisTarihi<br> <strong>Müşteri notu:</strong> $notlar<br> <strong>Güvenlik:</strong> $guvenlik<br> <strong>Temizlik:</strong> $temizlik<br> <strong>Host Hostes:</strong> $hostHostes<br> <strong>Simultane:</strong> $simultane<br> <strong>VIP Buisness center:</strong> $vipBuisness<br> <strong>Workshop / Sekreterya:</strong> $workshopSekreterya<br> "; // Mailin içeriği

if(!$mail->Send()){
	echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
	//header('Location: ../form-gonderilemedi.php');
} else {
	header('Location: ../form-gonderildi.php');
}

