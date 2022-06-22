<?php header('refresh:2; url=/') ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SQB Construction</title>
	<link rel="stylesheet" href="/assets/fonts/acrom.css">
</head>

<body>
	<style>
		header {
			display: none;
		}

		body {
			font-family: 'acrom';
			height: 100vh;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			overflow: hidden;

		}

		footer {
			width: 100%;
		}

		main {
			flex-grow: 1;
			position: relative;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			margin: 0;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			padding: 0;
		}

		main h1 {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
			color: #1c1c1c;
		}

		main p {
			color: #828282;
			text-align: center;
		}

		main a {
			position: absolute;
			right: 5%;
			top: 5%;
			color: #ba9e60;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
		}

		main a:hover {
			opacity: 0.7;
		}
	</style>

	<main>
		<h1>Ваша заявка успешно отправлена!</h1>
		<p>Мы перезвоним вам в ближайшее время</p>
		<a href="/">
			<img src="/assets/icons/formBackButton.svg" alt="">
		</a>
	</main>
</body>

</html>