<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, right); ?></title>
	<meta name="description" content="Temlate Landing Page Generator for Sport Events Bazabet" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="manifest" href="../site.webmanifest" />
	<link rel="apple-touch-icon" href="../img/defaults/icon.png" />

	<link rel="stylesheet" href="../css/normalize.css" />
	<link rel="stylesheet" href="../css/base.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="sport-event.css" />

	<meta name="theme-color" content="#25303B" />

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-MS78SB7');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class($class); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS78SB7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->