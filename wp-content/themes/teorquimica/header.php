<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php bloginfo() ?></title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo SITEPATH; ?>assets/img/favicon.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/css/teorquimica.css" rel="stylesheet">

	<!-- Google Translate -->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
					pageLanguage: 'pt'
				},
				'google_translate_element');
		}
	</script>

	<?php wp_head(); ?>
</head>

<body>

	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
		<div class="container d-flex">
			<div class="contact-info mr-auto">
				<i class="icofont-envelope"></i><a target="_blank" href="mailto:teorquimica@teorquimica.com.br">teorquimica@teorquimica.com.br</a>
				<i class="bx bxl-whatsapp"></i><a target="_blank" href="https://api.whatsapp.com/send?phone=5511985555385&text=Teorquimica">(11) 98555-5385</a>
			</div>
			<div id="google_translate_element" class="google-translate"></div>
			<div class="social-links">
				<a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="icofont-facebook"></i></a>
				<a href="/wp-admin" title="Login"><i class="bx bxs-user"></i></a>
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<a href="/" class="logo mr-auto">
				<h2><img src="<?php echo SITEPATH; ?>assets/img/logo.png" alt="">&ensp;<i><?php bloginfo() ?></i></h2>
			</a>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li><a href="/">Início</a></li>
					<li><a href="/#about">Sobre</a></li>
					<li><a href="/#services">Serviços</a></li>
					<li><a href="/#portfolio">Portfólio</a></li>
					<li><a href="/#contact">Contato</a></li>

				</ul>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->