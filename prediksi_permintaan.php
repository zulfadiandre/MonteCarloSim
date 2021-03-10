<html>
	<head>
		<title>Program Simulasi Monte Carlo - Zulfadiandre(152017032)</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main.css">
	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="img/favicon.ico">
	  	<script src="js/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
					<h1>Prediksi Permintaan (Monte Carlo)</h1>
					<h2>Zulfadiandre</h2>
					<h2>152017032</h2>
			</div>
		</div>
	</nav>

	<!-- Container -->
	<div class="container">
		<div class="panel panel-primary" >
			<div class="panel-heading">Deskripsi</div>
				<div class="panel-body">
					<ul class="nav nav-tabs">
						   <li class="active"><a data-toggle="tab" href="#monte">Simulasi Monte Carlo</a></li>

						</ul>
			  			 <div class="tab-content">
			  			 	  <div id="monte" class="tab-pane fade in active" style="padding-top: 20px;">
							    	<div class="col-md-8">
										<p>
										Tahapan simulasi:
										<ul>
											<li>Tentukan jumlah data permintaan</li>
											<li>Perhitungan distribusi dari data permintaan yang telah dimasukan</li>
											<li>Simulasi berdasarkan distribusi di atas</li>
										</ul>
									   </p>
							      	</div>
							    </div>
							    
						 </div>
		   		</div>
		   	</div>

		<div class="panel panel-primary">
					<div class="panel-heading">Input Data Permintaan</div>
						<div class="panel-body">
							<?php if(empty($_POST)): ?>
							<div class="input-group">
								<form action="prediksi_permintaan.php" method="post">
									<table class="custom-padding-table">
										<tr>
											<td>Masukan jumlah data</td>
											<td>:</td>
											<td><input type="number" min="0" name="jumlah" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
											<div class="input-group-btn">
											<td><input type="submit" value="Ok" class="btn btn-success"></td>
      										</div>
									</table>
								</form>
							</div>
							<?php else: ?>
								<?php $banyak = $_POST['jumlah'];?>
									<?php if(!empty($banyak)): ?>
									<div class="input-group">
									<h1><center>Tahap 1</center></h1>
									<p><center>masukan data permintaan</center></p>
									  <form action="proses_prediksi_permintaan.php" method="post">
									  	<div class="table table-responsive">
										  <table class="table table-hover custom-table-header">
												  <tr>
													<th>Permintaan</th>
													<th>Frekuensi</th>
												  <tr>
											<?php for($i=0; $i<$banyak; $i++): ?>
												  <tr>
													  <td><input type=number min=0 name=demand[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
													  <td><input type=number min=1 name=freq[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
												  </tr>
											<?php endfor; ?>
										  </table>
										  <table class="table table-hover custom-table-header">
												  <tr>
													<th>Biaya Produksi / Unit</th>
													<th>Harga Penjualan / Unit</th>
												  <tr>
												  <tr>
													  <td><input type=number min=1 name="biaya" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
													  <td><input type=number min=1 name="penjualan" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
												  </tr>
										  </table>
										  <div class="input-group-btn">
											<input type="hidden" name="jumlah" value="<?php echo $banyak; ?>">
											<center>
												<input type="submit" value="Hitung" name="submit" class="btn btn-success" style=" padding-left: 30px; padding-right: 30px;">
											</center>
										  </div>
										</div>
									  </form>
									</div>
									<?php endif; ?>
							<?php endif; ?>
									</div>
						</div>
					</div>

	</div>
	</body>

</html>
