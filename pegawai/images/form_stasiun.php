<?php include "head.php" ?>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php include "header.php" ?>
			<!-- end: header -->

			<div class="inner-wrapper">

				<!-- start: sidebar -->
				<?php include "sidebar.php" ?>
				<!-- end: sidebar -->

			<!--	<section role="main" class="content-body">
					<?php //include "headerbawah.php" ?> -->

					<section role="main" class="content-body" >
					<header class="page-header">
						<h2>Form Tambah Asset</h2>
					</header>


					<!-- start: page -->
					<div class="row-md-6" >
						<div class="col-md-12">
							<form id="form" action="forms-validation.html" class="form-horizontal">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Form Penginputan</h2>
										<p class="panel-subtitle">
											Penambahan Asset yang di perukan di PT KAI DRIVE III
										</p>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Kode   : <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="fullname" class="form-control" placeholder="eg.: Kode Asset" required name="kode"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Lokasi :  <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="fullname" class="form-control" placeholder="eg.: Lokasi Asset " required name="lokasi"/>
											</div>
											<div class="col-sm-9">
											</div>
										</div>	
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-10">
												<button class="btn btn-primary" name="save">Submit</button>
											</div>
										</div>
									</footer>
								</section>
							</form>
						</div>
					
					<!-- Memasukkan Asset ke Database -->

				</section>
			</div>
		</section>
	<?php include "script.php" ?>	
</body>