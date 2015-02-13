@extends("layouts/admin")
@section('content')
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		@foreach ($errors->all() as $error)
		<ul>
			<li>
				{{ $error }}
			</li>
		</ul>
		@endforeach
		<form action="{{url()}}/admin/login" method="post" id="login" class="form-signin" data-toggle="validator" role="form">
			<h2 class="form-signin-heading">Control de acceso</h2>
			<div class="form-group">
				<label class="sr-only" for="email">Correo electrónico</label>
				<input type="email" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon1" name="email" id="email" value="" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="password">Password</label>
				<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" id="password" value="" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Entrar</button>
		</form>
	</div>
</div>
@stop