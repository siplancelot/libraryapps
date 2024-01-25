<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?= $judul ;?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Anggota</li>
						<li class="breadcrumb-item active">Data Anggota</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-primary mb-3">Tambah Data</a>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Anggota</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($anggota as $item) : ?>
                    <tr>
                      <td><?= $item["AnggotaID"] ?></td>
                      <td><?= $item["AnggotaName"] ?></td>
                      <td><?= $item["AnggotaEmail"] ?></td>
                      <td>
                        <?php if ($item["AnggotaStatus"]) : ?>
                          <p class="badge rounded-pill text-bg-success">Aktif</p>
                        <?php else :?>
                          <p class="badge rounded-pill text-bg-danger">Tidak Aktif</p>
                        <?php endif ;?>
                      </td>
                      <td>
                        <a href="#" class="btn btn-primary">Update</a> 
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach ; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
			<!-- /.row -->
			
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
