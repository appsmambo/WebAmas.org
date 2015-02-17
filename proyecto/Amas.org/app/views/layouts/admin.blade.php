<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Administrador{{$pagina}}</title>
		<link href="http://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="{{url()}}/css/admin.css" rel="stylesheet">
@if (isset($login) && $login === true)
		<link href="{{url()}}/css/login.css" rel="stylesheet">
@else
		<link href="{{url()}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/froala_editor.min.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/froala_style.min.css" rel="stylesheet" type="text/css">
@endif
		<link href="{{url()}}/css/main.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/jquery.min.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<script src="{{url()}}/js/validator.js"></script>
@if (!isset($login))
		<script src="{{url()}}/js/froala_editor.min.js"></script>
		<!--[if lt IE 9]>
		<script src="{{url()}}/js/froala_editor_ie8.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/admin.js"></script>
@endif
	</head>
	<body>
@if (isset($login) && $login === true)
		<div class="container">
			@yield('content')
		</div>
@else
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Administrador</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{url()}}/admin/logout">Cerrar sesión <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		@yield('content')
@endif
	</body>
</html>