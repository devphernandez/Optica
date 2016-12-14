<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
		<main>
            <div class="container">
				<h3>Inventario</h3>
				<div class="divider white"></div>
				<div class="row">
					<!--Tarjeta para ingresar nuevos productos-->
					<div class="col s12 m6">
						<div class="card">
							<div class="card-content">
								<div class="row">
									<div class="col s12">
										<div class="row">
											<div class="input-field col s12">
												<input name="nombre" type="text">
												<label for="nombre">Nombre del producto</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s6">
												<input id="cantidad" type="number" class="validate">
												<label for="cantidad">Cantidad</label>
											</div>
											<div class="input-field col s6">
												<input id="valor" type="number" class="validate">
												<label for="valor">Valor</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-action">
								<a class="waves-effect waves-light btn"><i class="material-icons right">send</i>Agregar Producto</a>
							</div>
						</div>
					</div>
					<!--Tarjeta que muestra los diferentes marcos-->
					<div class="col s12 m6">
					  <div class="card blue-grey lighten-2">
						<div class="card-content white-text">
						  <span class="card-title">Cantidad de marcos diferentes: 43</span>
						</div>
					  </div>
					</div>
					<!--Tarjeta que muestra la cantidad marcos-->
					<div class="col s12 m6">
					  <div class="card blue-grey lighten-2">
						<div class="card-content white-text">
						  <span class="card-title">Cantidad de marcos totales: 265</span>
						</div>
					  </div>
					</div>
					<!--Tarjeta que muestra el valor total de los marcos-->
					<div class="col s12 m6">
					  <div class="card blue-grey lighten-2">
						<div class="card-content white-text">
						  <span class="card-title">Valor total de los marcos: $439.000 clp</span>
						</div>
					  </div>
					</div>	
				</div>
				<!--fin row agregar producto-->
				<div class="divider white"></div>
				<!--inicio row de tabla de productos-->
				<div class="row">
					<div class="col s12 m12 l12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Tabla de productos</span>
								<table class="bordered highlight responsive-table">
									<thead>
										<tr>
											<th data-field="id">Name</th>
											<th data-field="name">Item Name</th>
											<th data-field="price">Item Price</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>Alvin</td>
											<td>Eclair</td>
											<td>$0.87</td>
										</tr>
										<tr>
											<td>Alan</td>
											<td>Jellybean</td>
											<td>$3.76</td>
										</tr>
										<tr>
											<td>Jonathan</td>
											<td>Lollipop</td>
											<td>$7.00</td>
										</tr>
									</tbody>
								 </table>
							</div>
						</div>
					</div>
				</div>
				<!--fin row tabla de productos-->
			</div>
			<!--fin container-->
		</main>
<?php include 'footer.php'; ?>