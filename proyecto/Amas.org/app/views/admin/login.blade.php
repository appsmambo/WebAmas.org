@extends("layouts/admin")
@section('content')
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		<form id="login" class="form-signin">
			<h2 class="form-signin-heading">Control de acceso</h2>
			<label class="sr-only" for="email">Correo electrónico</label>
			<input type="email" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon1" name="email" id="email" value="">
			<label class="sr-only" for="email">Password</label>
			<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" id="password" value="">
			<button type="submit" class="btn btn-primary btn-block">Entrar</button>
		</form>
	</div>
</div>
@stop