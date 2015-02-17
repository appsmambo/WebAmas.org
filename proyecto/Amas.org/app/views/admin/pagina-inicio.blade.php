@extends("layouts/admin")
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active">
					<a href="#">Editar páginas <span class="sr-only">(actual)</span></a>
					<ul>
						<li class="active">
							<a href="{{url()}}/admin/paginas/inicio">
								Inicio *
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
			<form action="{{url()}}/admin/paginas/inicio" method="post" id="paginas-inicio" data-toggle="validator" role="form">
				<h1 class="page-header">Editar página INICIO</h1>
				
				<h2 class="sub-header">Encabezado <button type="submit" class="btn btn-primary pull-right">Grabar</button></h2>
				<div class="form-group">
					<label for="e_titulo">Título</label>
					<input type="text" class="form-control" id="e_titulo" placeholder="Título" required>
				</div>
				<div class="form-group">
					<label for="e_descripción">Descripción</label>
					<input type="text" class="form-control" id="e_descripción" placeholder="Descripción" required>
				</div>
				<div class="form-group">
					<label for="e_link">Link</label>
					<input type="url" class="form-control" id="e_link" placeholder="Link" required>
				</div>
				
				<h2 class="sub-header">¿Qué es Amas? <button type="submit" class="btn btn-primary pull-right">Grabar</button></h2>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#1</div>
						<input type="text" class="form-control" name="queEsTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="queEsDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#2</div>
						<input type="text" class="form-control" name="queEsTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="queEsDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#3</div>
						<input type="text" class="form-control" name="queEsTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="queEsDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#4</div>
						<input type="text" class="form-control" name="queEsTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="queEsDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#5</div>
						<input type="text" class="form-control" name="queEsTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="queEsDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#6</div>
						<input type="text" class="form-control" name="queEsTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="queEsDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				
				<h2 class="sub-header">Mensaje <button type="submit" class="btn btn-primary pull-right">Grabar</button></h2>
				<div class="form-group" id="mensaje">
					Use las negritas para resaltar el texto.
				</div>
				
				<h2 class="sub-header">Círculos skills</h2>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#1</div>
						<input type="number" class="form-control" name="skillPorcentaje[]" placeholder="Porcentaje" required>
						<input type="text" class="form-control" name="skillTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="skillDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#2</div>
						<input type="number" class="form-control" name="skillPorcentaje[]" placeholder="Porcentaje" required>
						<input type="text" class="form-control" name="skillTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="skillDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#3</div>
						<input type="number" class="form-control" name="skillPorcentaje[]" placeholder="Porcentaje" required>
						<input type="text" class="form-control" name="skillTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="skillDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#4</div>
						<input type="number" class="form-control" name="skillPorcentaje[]" placeholder="Porcentaje" required>
						<input type="text" class="form-control" name="skillTitulo[]" placeholder="Título" required>
						<input type="text" class="form-control" name="skillDescripcion[]" placeholder="Descripción" required>
					</div>
				</div>
				
				<h2 class="sub-header">Nuestros miembros <button type="submit" class="btn btn-primary pull-right">Grabar</button></h2>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#1</div>
						<input type="text" class="form-control" name="miembroMensaje[]" placeholder="Mensaje" required>
						<input type="text" class="form-control" name="miembroNombre[]" placeholder="Título" required>
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#2</div>
						<input type="text" class="form-control" name="miembroMensaje[]" placeholder="Mensaje">
						<input type="text" class="form-control" name="miembroNombre[]" placeholder="Título">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#3</div>
						<input type="text" class="form-control" name="miembroMensaje[]" placeholder="Mensaje">
						<input type="text" class="form-control" name="miembroNombre[]" placeholder="Título">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#4</div>
						<input type="text" class="form-control" name="miembroMensaje[]" placeholder="Mensaje">
						<input type="text" class="form-control" name="miembroNombre[]" placeholder="Título">
					</div>
				</div>
				
				<h2 class="sub-header">Logos <button type="submit" class="btn btn-primary pull-right">Grabar</button></h2>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#1</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#2</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#3</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#4</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#5</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#6</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#7</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<div class="input-group">
						<div class="input-group-addon">#8</div>
						<input type="file" class="form-control" name="logo[]">
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>
@stop