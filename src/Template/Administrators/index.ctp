<?php $this->layout='fundamenta'?>	
	<div class="">
		
		<section class="main-row">
			<!--Buscador -->
			<div class="col-md-offset-1 col-md-2">
				<label for="" class="">Buscador de texto</label>
				<div class="form-group">
					<input type="text" class="buscador" placeholder="Nombre de usuario:">
					<input type="text" class="buscador" placeholder="Rut:">
					<input type="text" class="buscador" placeholder="Tipo de usuario:">
			    </div>
			    <div class="form-group text-center">
			    	<button class="btn btn-primary text-center">Buscar</button>
			    </div>
			</div>
			<!--Rectangulo de Reclamos-->
			<div class="col-md-8">
				<div class="tabla">
					<div class="filaHeader">
						<div class="elementoHeader5">Nombre</div>
						<div class="elementoHeader5">Apellido</div>
						<div class="elementoHeader5">Rut</div>
						<div class="elementoHeader5">Tipo de Usuario</div>
						<div class="elementoHeader5">Seleccion</div>
					</div>
					<div class="fila">
						<div class="elemento5">1.1</div>
						<div class="elemento5">1.2</div>
						<div class="elemento5">1.3</div>
						<div class="elemento5">1.4</div>
						<div class="elemento5">	
							<label><input type="radio" id="q1" name="grupo" value="1">Seleccionar</label>
						</div>	
					</div>
					<div class="fila">
						<div class="elemento5">2.1</div>
						<div class="elemento5">2.2</div>
						<div class="elemento5">2.3</div>
						<div class="elemento5">2.4</div>
						<div class="elemento5">
							<label><input type="radio" id="q1" name="grupo" value="2">Seleccionar</label>
						</div>
					</div>	
				</div>

				<!-- Botones de centro-->
				<!-- Segun G2: Modificar Estado / Finalizar Ticket -->

				<div class="row text-center" style="margin-top:50px">
						<button class="btn btn-primary" style="background:black">Agregar Usuario</button>
						<button class="btn btn-primary" style="background:black">Modificar Usuario</button>
						<button class="btn btn-primary" style="background:black">Eliminar Usuario</button>
				</div>
			</div>
		</section>
	</div>