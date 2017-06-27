<?php
    require_once('crud/functions.php');
	include('header.php');
?>

<!-- Banner -->
<div class="fh5co-page-title" style="background-image: url(images/slide_6.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 animate-box">
					<h1><span class="colored">Meus </span> Anúncios</h1>
				</div>
			</div>
		</div>
	</div>
	<div id="best-deal">
	
	
		<div class="container">
			<div class="row">
		<div class="col-sm-6">
			<h2>Para vender</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="criaranuncio.php"><i class="fa fa-plus"></i>Novo Anúncio</a>
	    </div>
	</div>

<hr>

<!-- Tabela de Meus anúncios Venda -->
<table class="table table-hover">
<thead>
	<tr>
		<th>Nome</th>
		<th width="30%">Valor</th>
		<th>Descrição</th>
		<th>Endereço</th>
		<th>Telefone</th>
		<th>Data Inserção</th>
	</tr>
</thead>
<tbody>
<?php 
	$anuncio = null;
	$database = open_database();
	$table = 'tbl_anuncios';
	$result = mysqli_query($database, "SELECT * FROM " .$table. " WHERE statusAnuncio='1' AND tipo='Vende' AND id_anunciante=".$row['userID']);		  
	while($anuncio = mysqli_fetch_array($result)){
		echo "<tr data-target='#verAnuncio' data-toggle='modal' style='cursor: pointer'>";
		echo "<td>" .$anuncio['nome']. "</td>";
		echo "<td>" .$anuncio['valor']. "</td>";
		echo "<td>" .$anuncio['descricao']. "</td>";
		echo "<td>" .$anuncio['endereco']. "</td>";
		echo "<td>" .$anuncio['telefone']. "</td>";
		echo "<td class='actions text-right'>";
		echo "<a href='editaranuncio.php?id=" .$anuncio['id']. "' class='btn btn-sm btn-warning'><i class='fa fa-pencil'></i> Editar</a>
			<a href='#' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#delete-modal' data-anuncio='" .$anuncio['id']. "'>
				<i class='fa fa-trash'></i> Excluir
			</a>
		</td>
	</tr>";
}; 
	close_database($database); ?>
</tbody>
</table>
		<hr>
		
			<div class="row">
		<div class="col-sm-6">
			<h2>Para alugar</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="criaranuncio.php"><i class="fa fa-plus"></i>Novo Anúncio</a>
	    </div>
	</div>


<hr>

<!-- Tabela de Meus anúncios Venda -->
<table class="table table-hover">
<thead>
	<tr>
		<th>Nome</th>
		<th width="30%">Valor</th>
		<th>Descrição</th>
		<th>Endereço</th>
		<th>Telefone</th>
		<th>Data Inserção</th>
	</tr>
</thead>
<tbody>
  <?php 
	$anuncio = null;
	$database = open_database();
	$table = 'tbl_anuncios';
	$result = mysqli_query($database, "SELECT * FROM " .$table. " WHERE statusAnuncio='1' AND tipo='Aluga' AND id_anunciante=".$row['userID']);		  
	while($anuncio = mysqli_fetch_array($result)){
		echo "<tr data-target='#verAnuncio' data-toggle='modal' style='cursor: pointer'>";
		echo "<td>" .$anuncio['nome']. "</td>";
		echo "<td>" .$anuncio['valor']. "</td>";
		echo "<td>" .$anuncio['descricao']. "</td>";
		echo "<td>" .$anuncio['endereco']. "</td>";
		echo "<td>" .$anuncio['telefone']. "</td>";
		echo "<td class='actions text-right'>";
		echo "<a href='editaranuncio.php?id=" .$anuncio['id']. "' class='btn btn-sm btn-warning'><i class='fa fa-pencil'></i> Editar</a>
			<a href='#' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#delete-modal' data-anuncio='" .$anuncio['id']. "'>
				<i class='fa fa-trash'></i> Excluir
			</a>
		</td>
	</tr>";
}; 
	close_database($database); ?>
</tbody>
</table>
		
<!-- Modal verAnuncio -->

			</div>
		</div>


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	
<div class="modal fade" id="verAnuncio" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Create Project</h4>
            </div>
            <div class="modal-body">Not yet made</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

	</body>
	
	
</html>