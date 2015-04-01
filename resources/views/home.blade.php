<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>James Gifford</title>

		<link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<header>
			<div id="logo"></div>
			<h1>James Gifford</h1>
			<p>Web Developer</p>
			<a href="#contact" class="glyphicon glyphicon-menu-down"></a>
		</header>

		<section id="skills">
		</section>

		<section id="work">
		</section>

		<section id="fun">
		</section>

		<section id="about">
		</section>

		<section id="social">
		</section>

		<section id="contact">
			<h2>Contact Me</h2>
			{!! Form::open(['url' => 'contact', 'method' => 'post']) !!}

				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', '', array('placeholder' => 'Name')) !!}

				{!! Form::label('email', 'Email:') !!}
				{!! Form::email('email', '', array('placeholder' => 'Email')) !!}

				{!! Form::label('content', 'Message:') !!}
				{!! Form::textarea('content', '', array('placeholder' => 'Message')) !!}

				{!! Form::submit('Send') !!}

			{!! Form::close() !!}
		</section>

		<footer>
			<p>Created by James in Oregon</p>
			<p>&copy;Copyright 2015</p>
		</footer>

		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/app.js') }}"></script>
	</body>
</html>