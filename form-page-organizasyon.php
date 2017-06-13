<?php
$page="organizasyon-form";
$pageKind="Clean Forms";
$pageTitle="Organizasyon Formu";
include("header.php");
?>

<section id="form">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Organizasyon Talep Formu</h2><br>

				<form name="organizasyon-form" id="organizasyon-form" action="form-php/form-to-mail-organizasyon.php" method="post" onsubmit="return isMiceVal(this)">

				  <fieldset class="form-group">
				    <label for="realname">İsim ve Soyisiminiz*</label>
				    <input type="Namesurname" name="mice_realname" class="form-control" id="mice_realname" placeholder="İsim & soyad">
				    <div id="mice_name_hata" class="label label-warning">Lütfen İsim ve Soyisminizi giriniz.</div>
				  </fieldset>
				  <fieldset class="form-group">
				    <label for="kurumAdi">Kurum Adınız</label>
				    <input type="text" name="mice-kurumadi" class="form-control" id="mice-kurumadi" placeholder="Kurum adı">
				  </fieldset>
				  <fieldset class="form-group">
				    <label for="telefonNo">Telefon Numaranız*</label>
				    <input type="text" name="mice_telno" class="form-control" id="mice_telno" placeholder="0xxxxxxxxxx">
				    <div id="mice_tel_hata" class="label label-warning">Lütfen telefon numaranızı giriniz.</div>
				    <small class="text-muted" style="display: inline-block;">*Lütfen telefon numaranızı başına 0 koymadan 10 hane olarak yazınız</small>
				  </fieldset>
				  <fieldset class="form-group">
				    <label for="email">E-mail Adresiniz*</label>
				    <input type="email" name="mice_email" class="form-control" id="mice_email" placeholder="örnek@email.com">
				    <div id="mice_email_hata" class="label label-warning">Lütfen e-mail adresinizi giriniz.</div>
				    <small class="text-muted" style="display: inline-block;">Mail adresinizi hiç kimse ile paylaşmayız.</small>
				  </fieldset>
				  <fieldset class="form-group">
				    <label for="kisiSayisi">Kişi Sayısı</label>
						<input type="text" name="mice-kisisayisi" class="form-control" id="mice-kisisayisi" placeholder="örn. 20">
				  </fieldset>
				  <fieldset class="form-group">
						<label for="BaslangicTarihi">Başlangıç Tarihi</label>
						<div class="datepicker input-group date" data-date-format="dd-mm-yyyy">
					    <input id="mice-baslangictarihi" name="mice-baslangictarihi" class="form-control" type="text" readonly />
					    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
				  </fieldset>
				  <fieldset class="form-group">
						<label for="BitisTarihi">Bitiş Tarihi</label>
						<div class="datepicker input-group date" data-date-format="dd-mm-yyyy">
					    <input id="mice-bitistarihi" name="mice-bitistatihi" class="form-control" type="text" readonly />
					    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
				  </fieldset>
				  <fieldset class="form-group">
				    <label for="notAlani">Notlarınız</label>
				    <textarea class="form-control" name="mice-notlar" id="mice-notlar" rows="3"></textarea>
				  </fieldset>
				  <fieldset class="form-group checkbox-group">
				  	<label for="digerTalepler">Diğer Talepleriniz</label><br>
					  <label class="form-checkbox">
					    <input type="checkbox" name="mice-guvenlik" id="mice-guvenlik" value="İstiyor"> Güvenlik
					  </label>
					  <label class="form-checkbox">
					    <input type="checkbox" name="mice-temizlik" id="mice-temizlik" value="İstiyor"> Temizlik
					  </label>
					  <label class="form-checkbox">
					    <input type="checkbox" name="mice-host-hostes" id="mice-host-hostes" value="İstiyor"> Host*Hostes
					  </label>
					  <label class="form-checkbox">
					    <input type="checkbox" name="mice-simultane" id="mice-simultane" value="İstiyor"> Simultane
					  </label>
					  <label class="form-checkbox">
					    <input type="checkbox" name="mice-vip-buisness-center" id="mice-vip-buisness-center" value="İstiyor"> VIP Buisness center
					  </label>
					  <label class="form-checkbox">
					    <input type="checkbox" name="mice-workshop-sekreterya" id="mice-workshop-secreterya" value="İstiyor"> Workshop / Sekreterya
					  </label>
				  </fieldset>
				  <button type="submit" class="btn btn-primary" id="toplanti-btnGonder" name="submit" value="Submit" style="margin-bottom: 10px;" title="Lütfen gerekli alanları giriniz.">Gönder</button> <br>
				  <div id="mice-form-gonderiliyor" class="label label-success" style="display: none; font-size: 1rem;">Form Gönderiliyor<i class="fa fa-cog fa-spin fa-fw margin-bottom"></i></div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
include("footer.php");
?>
