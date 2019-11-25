<!DOCTYPE html>
<html>
	<head>
		<title>Passwordcockpit</title>
		<link rel="stylesheet" href="style.css">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-18590515-33"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-18590515-33');
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		$(function(){
			$.each($("h1,h2"),function(){
				$(this).attr('id', $(this).text().toLowerCase().replace(/ /g, "-"));
			});
		})
		</script>
	</head>
<body>

<header>
Passwordcockpit is maintained on <a alt="GitHub" href="https://github.com/passwordcockpit/passwordcockpit" target="_blank">
<svg id="Outline_Version" data-name="Outline Version" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
	<title>developer-community-github-1</title>
	<path d="M12,0A12,12,0,0,0,8.59,23.5a1.25,1.25,0,0,0,1.61-1.2V20a.75.75,0,0,0-.91-.73A2,2,0,0,1,6.66,18l-.11-.27.18.13a2.62,2.62,0,0,0,3.06.5.75.75,0,0,0,.44-.58,4.84,4.84,0,0,1,.38-1.36.75.75,0,0,0-.41-1.31c-2.4-.27-3.85-.66-3.85-3.66A3.1,3.1,0,0,1,7.18,9.3a.75.75,0,0,0,.14-.79,2.65,2.65,0,0,1-.06-1.57A5.46,5.46,0,0,1,9,7.81a.76.76,0,0,0,.62.1,8.76,8.76,0,0,1,2.28-.31,8.67,8.67,0,0,1,2.29.31.75.75,0,0,0,.62-.1,5.63,5.63,0,0,1,1.76-.87,2.66,2.66,0,0,1-.05,1.57.75.75,0,0,0,.14.79,3.09,3.09,0,0,1,.82,2.15c0,3-1.46,3.38-3.86,3.65a.75.75,0,0,0-.64.52.74.74,0,0,0,.22.79,3.61,3.61,0,0,1,.43,1.77v4.17a1.25,1.25,0,0,0,1.25,1.25,1.19,1.19,0,0,0,.34,0A12,12,0,0,0,12,0Zm3.16,22V18.18a5.94,5.94,0,0,0-.27-1.72c1.93-.31,4.12-1.18,4.12-5a4.62,4.62,0,0,0-.93-2.83,4.52,4.52,0,0,0-.24-2.73.75.75,0,0,0-.47-.44c-.26-.08-1.24-.25-3.09.92a10.19,10.19,0,0,0-4.7,0c-1.85-1.18-2.83-1-3.09-.92A.75.75,0,0,0,6,5.9a4.51,4.51,0,0,0-.24,2.73,4.62,4.62,0,0,0-.93,2.83c0,3.83,2.21,4.69,4.14,5-.07.24-.13.47-.17.66-.42.11-.65-.06-1.2-.47a7.19,7.19,0,0,0-2.81-1.38.75.75,0,0,0-.74,1.22,5.23,5.23,0,0,1,1.17,2A3.52,3.52,0,0,0,8.7,20.89V22a10.5,10.5,0,1,1,6.46,0Z"/></svg> GitHub</a> and <a alt="DockerHub" href="https://hub.docker.com/u/passwordcockpit" target="_blank">
<svg version="1.1" id="Regular" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
	<title>whale-body</title>
	<g>
	<path d="M11.748,24c-6.971,0-11.275-4.392-11.923-8.731c-0.133-0.816,0.194-1.644,0.855-2.155c1.444-1.148,3.188-1.793,5.04-1.863
		l12.028,0c1.036,0,1.5-0.565,1.5-1.125S18.784,9,17.748,9h-1.05c-0.406-0.003-0.782-0.162-1.062-0.448
		c-0.281-0.285-0.434-0.663-0.43-1.063c0.003-0.314,0.102-0.614,0.286-0.868c0.923-1.236,2.297-1.993,3.811-2.112
		c0.208-1.324,1.008-2.487,2.186-3.154c0.219-0.135,0.484-0.21,0.757-0.21c0.519,0,1.01,0.274,1.282,0.716
		c0.146,0.238,0.223,0.511,0.222,0.789v11.597c-0.143,2.557-1.303,4.939-3.196,6.608l0.82,1.229
		c0.198,0.296,0.158,0.694-0.094,0.946c-0.091,0.091-0.935,0.889-2.526,0.889c-0.891,0-1.846-0.252-2.839-0.749
		c-2.201-1.101-2.987-2.4-3.257-3.061c-1.201-0.386-2.166-1.074-3.099-1.741C8.151,17.366,6.937,16.5,4.998,16.5H1.71
		c1.128,2.872,4.335,6,10.038,6c0.413,0,0.75,0.336,0.75,0.75S12.162,24,11.748,24z M13.99,19.393c0.001,0,0.3,1.29,2.593,2.436
		c0.784,0.392,1.514,0.591,2.172,0.591c0.387,0,0.697-0.068,0.934-0.156l-2.565-3.848c-0.111-0.167-0.151-0.367-0.112-0.563
		c0.039-0.196,0.153-0.365,0.32-0.477c0.123-0.083,0.267-0.126,0.416-0.126c0.251,0,0.485,0.125,0.624,0.334l1.34,2.01
		c1.502-1.394,2.421-3.335,2.537-5.389L22.248,2.647c-0.944,0.535-1.515,1.526-1.5,2.592c0.003,0.208-0.082,0.41-0.232,0.553
		C20.376,5.926,20.191,6,19.996,6c-0.006,0-0.033-0.001-0.039-0.001c-0.081-0.005-0.157-0.007-0.233-0.007
		c-1.184,0-2.314,0.568-3.024,1.518l1.049-0.01c1.969,0,3,1.321,3,2.625s-1.031,2.625-3,2.625H5.755
		c-1.518,0.059-2.953,0.593-4.15,1.544C1.385,14.465,1.272,14.732,1.302,15h3.696c2.42,0,3.95,1.092,5.429,2.148
		c0.969,0.691,1.884,1.344,3.002,1.624C13.727,18.847,13.947,19.09,13.99,19.393L13.99,19.393z"/>
	<path d="M8.748,9.75c-0.414,0-0.75-0.336-0.75-0.75V3.75c0-1.241-1.009-2.25-2.25-2.25s-2.25,1.009-2.25,2.25
		c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75C1.998,1.682,3.68,0,5.748,0c1.196,0,2.298,0.564,3,1.505
		C9.45,0.564,10.552,0,11.748,0c2.068,0,3.75,1.682,3.75,3.75c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75
		c0-1.241-1.009-2.25-2.25-2.25s-2.25,1.009-2.25,2.25V9C9.498,9.414,9.162,9.75,8.748,9.75z"/>
	<path d="M12.123,16.5c-0.044,0-0.088-0.004-0.13-0.011c-0.513-0.06-0.922-0.469-0.983-0.982c-0.008-0.043-0.012-0.087-0.012-0.131
		s0.004-0.088,0.012-0.131c0.06-0.513,0.47-0.922,0.983-0.982c0.042-0.008,0.086-0.011,0.13-0.011s0.088,0.004,0.131,0.011
		c0.513,0.06,0.923,0.47,0.983,0.983c0.008,0.042,0.011,0.086,0.011,0.131s-0.004,0.088-0.011,0.131
		c-0.06,0.513-0.47,0.923-0.983,0.983C12.211,16.496,12.168,16.5,12.123,16.5z"/>
	</g>
</svg> DockerHub</a>
</header>

<?php

require "vendor/autoload.php";

$Parsedown = new Parsedown();

echo $Parsedown->text(file_get_contents("https://raw.githubusercontent.com/passwordcockpit/passwordcockpit/1.0.0-dev/README.md"));

?>

</body>
</html>
