 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
						<h3>Pengaturan Apotek</h3>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Ubah Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-stripped">
							<thead>
								<tr>
									<td>Nama Apotek</td>
									<td>Alamat Apotek</td>
									<td>Kontak (Hp)</td>
									<td>Nama Pemilik Apotek</td>
									<td>Aksi</td>
								</tr>
							</thead>
							<tbody>
								<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">		
								<tr>
									<td><input class="form-control" name="namaapotek" value="<?php echo $apotek['nama_apotek'];?>" placeholder="Nama Apotek"></td>
									<td><input class="form-control" name="alamat" value="<?php echo $apotek['alamat_apotek'];?>" placeholder="Alamat apotek"></td>
									<td><input class="form-control" name="kontak" value="<?php echo $apotek['tlp'];?>" placeholder="Kontak (Hp)"></td>
									<td><input class="form-control" name="pemilik" value="<?php echo $apotek['nama_pemilik'];?>" placeholder="Nama Pemilik Apotek"></td>
									<td><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button></td>
								</tr>
								</form>
							</tbody>
						</table>
						<div class="clearfix" style="padding-top:41%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
