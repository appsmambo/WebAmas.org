@extends("layouts/admin")
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active">
					<a href="#">Editar páginas <span class="sr-only">(actual)</span></a>
					<ul>
						<li>
							<a href="{{url()}}/admin/paginas/inicio">
								Inicio
							</a>
						</li>
						<li>
							<a href="{{url()}}/admin/paginas/cursos">
								Cursos
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Opciones</h1>
		</div>
	</div>
</div>
@stop