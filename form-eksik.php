<?php
$page="form-undone";
$pageKind="Clean Forms";
$pageTitle="Eksik";

include("header.php");

?>

<!-- section: Form-done content -->
<section id="uyari">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-warning" role="alert">
				  <strong>Dikkat!</strong> Formda doldurmanız gerek alanları eksik doldurdunuz. Lütfen tekrar deneyiniz.
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /section: Form-done content -->

<?php
include("footer.php");
?>
