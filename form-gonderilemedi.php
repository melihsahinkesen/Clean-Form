<?php
$page="form-undone";
$pageKind="Clean Forms";
$pageTitle="Gönderilemedi";

include("header.php");
?>

<!-- section: Form-done content -->
<section id="uyari">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
				  <strong><i class="fa fa-times-circle" aria-hidden="true"></i> Hata</strong> Form gönderilirken bir hata ile karşılaşıldı. Lütfen daha sonra tekrar deneyiniz.
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /section: Form-done content -->

<?php
include("footer.php");
?>
