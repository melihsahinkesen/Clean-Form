<!DOCTYPE html>
<html lang="tr">
<head>

<!-- Basic 
================================================== -->
<meta charset="utf-8">
<title>Form - Clean</title>
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="assets/images/favicons/favicon.ico">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- CSS
================================================== -->
<!-- Normalize CSS -->
<link rel="stylesheet" href="assets/css/normalize.css" type="text/css" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<!-- Datepicker CSS -->
<link rel="stylesheet" href="assets/css/datepicker.min.css" type="text/css" />
<!-- Costom CSS -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<!-- Font Awesome  CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Fonts
================================================== -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
	<nav class="nav nav-inline">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				  <a class="nav-link <?php echo ($page == "fast-form" || $page == "organizasyon-form") ? "active" : ""; ?>" href="form-page-fast.php">Clean Forms</a>
				</div>
			</div>
	  </div>
	</nav>

  <header>
  		<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text"> <?php echo $pageKind; ?> - <?php echo $pageTitle; ?></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<nav class="nav nav-inline alt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				  <a class="nav-link <?php echo ($page == "fast-form") ? "active" : ""; ?>" href="form-page-fast.php">Hızlı Form</a>
				  <a class="nav-link disabled" href="#">İletişim Formu</a>
				  <a class="nav-link <?php echo ($page == "organizasyon-form") ? "active" : ""; ?>" href="form-page-organizasyon.php">Organizasyon Formu</a>
				</div>
			</div>
	  </div>
	</nav>
