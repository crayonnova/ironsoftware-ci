<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:title" content="C# Library Suite for .NET | Iron Software">
	<meta property="og:type" content="website">
	<meta property="og:description" content="We develop C# software libraries that suit your needs; Excel, OCR, QR, Barcode, and PDF. Free for developers.">
	<meta property="og:image" content="./images/logo_with_text.svg">
	<meta property="og:url" content="https://ironsoftware.com/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="We develop C# software libraries that suit your needs; Excel, OCR, QR, Barcode, and PDF. Free for developers.">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="./site.webmanifest">
	<title><?php echo $this->renderSection("title-text") ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="preload" href="./fonts/gotham/gothambold-webfont.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="./fonts/gotham/gothambook-webfont.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="./fonts/gotham/gothamlight-webfont.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="./fonts/gotham/gothammedium-webfont.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="stylesheet" href="./style.css" />
	<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		:root {
			--body-background-color: #2C0F29; 
			--body-color: #ffffff;
			--color-fake-purple: #C6AAC6;
			--gotham-bold: 'gothambold';
			--gotham-medium: 'gothammedium';
			--gotham-light-font: 'gothamlight';
			--blue-blur-image: url('images/blue_blur.svg');
			--primary-color: #402640;
			--secondary-color: #431F43;
			--background-opacity: 0.8;
			--dark-text-color: #331433;
			--light-text-color: #E7EEF0;
			--accent-color: #E01A59;
			--border-radius: 50px;
		}

		body {
			background-color: var(--body-background-color) !important;
			color: var(--body-color) !important;
			scroll-behavior: smooth;
			font-family: var(--gotham-light-font);
		}

		.color-fake-purple {
			color: var(--color-fake-purple);
		}

		h1, h2, h3 {
			font-family: var(--gotham-bold);
		}

		p {
			font-family: var(--gotham-light-font);
		}

		.skip-nav {
			transform: translateY(-100px);
			position: absolute;
		}

		.skip-nav:focus {
			position: static;
			transform: translateY(0px);
		}

		.big-brand-logo {
			width:  47vw;
			height: 65vh;
			z-index: 5;
			background: url('images/big_brand_logo.svg') no-repeat;
			background-size: contain;
			background-position: top right;
		}

		.container-fluid:not(.nav-container) {
			max-width: 1170px !important;
		}


		.navbar .navbar-nav a {
			font-family: var(--gotham-bold);
			font-size: 11px;
		}

		.word-separator {
			width: 1px; 
			border: 1px solid var(--secondary-color);
		}

		.green-badge {
			transform: rotate(25deg);
			display: inline-block;
			font-size: 11px !important;
			width: 80px;
			height: 80px;
			background: url('images/green_badge.svg') no-repeat;
			position: relative;
			top: 17px;
			left: -26px;
		}

		.green-badge span {
			left: 10px;
			top: 20px;
			transform: rotate(345deg);
			font-family: var(--gotham-bold);
		}

		.brand-img {
			width: 270px;
			height: 180px;
			background: url('images/html_to_pdf_icon_shadow.svg') no-repeat cover;
		}

		.sub-header {
			font-size: 1.13em;
			font-family: var(--gotham-medium);
		}
		
		.text-bold {
			font-family: var(--gotham-medium);
		}

		.text-bolder {
			font-family: var(--gotham-bold);
		}

		.tube {
			width: 100%;
			border-radius: var(--border-radius);
			border: 3px solid var(--secondary-color);
			background: rgba(23, 6, 23, var(--background-opacity));
		}

		.tube--muted {
			border-color: var(--dark-text-color);
		}

		.button {
			font-family: var(--gotham-bold);
			border-radius: var(--border-radius);
			background-color: var(--color-fake-purple);
			color: var(--dark-text-color);
			width: fit-content;
		}

		.button--invert {
			background-color: var(--dark-text-color);
			color: var(--color-fake-purple);
			user-select: none;
		}

		.accent-container {
			background: var(--blue-blur-image) no-repeat center;
		}

		.accent-container__second {
			background: rgba(23, 6, 23, 0.3);
		}

		.submit-button {
			max-width: 600px;
		}

		.submit-button .submit-button__input {
			border-radius: var(--border-radius);
			border: 3px solid var(--light-text-color);
			padding-right: 50px;
			font-family: var(--gothammedium);
		}

		.submit-button .submit-button__text {
			margin: 3px;
			height: calc(100% - 6px);
			border-radius: var(--border-radius);
			background-color: var(--accent-color);
			font-family: var(--gotham-bold);
		}
	</style>
</head>
<body> 