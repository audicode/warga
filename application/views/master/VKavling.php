<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="card">
  <h5 class="card-header">Form Data Kavling</h5>
  <div class="card-body">

    <!-- tampilan tambah data -->
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahdata">
  Tambah Data
  </button>
    <!-- tampilan akhir tambah data  -->

    <!-- Modal tampilan form tambah data-->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdata" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahdata">Konfirmasi Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('Welcome/KavlingInsert');?>" method="POST">
        <div class="mb-3">
         <label for="kd_blok" class="form-label">Kode Blok</label>
         <input name="kd_blok" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="nama_blok" class="form-label">Nama Blok</label>
         <input name="nama_blok" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="no_blok" class="form-label">Nomor Blok</label>
         <input name="no_blok" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="lokasi" class="form-label">Lokasi</label>
         <input name="lokasi" type="text" class="form-control" id="updateData">
        </div>
        <div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
     <!-- Modal tampilan akhir form tambah -->     

     <!-- Tampilan tabel -->
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Blok</th>
      <th scope="col">Nama Blok</th>
      <th scope="col">Nomor Blok</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Tools</th>
    </tr>
  </thead>
   <tbody class="table-group-divider">
   <?php
	if(!empty($DataWarga))
	{   
        $nomor=1;
		foreach($DataWarga as $ReadDS)
		{
	?>
    <tr>
      <th scope="row"><?php echo $nomor?></th>
		<td><?php echo $ReadDS->kd_blok; ?></td>
		<td><?php echo $ReadDS->nama_blok; ?></td>
		<td><?php echo $ReadDS->no_blok; ?></td>
		<td><?php echo $ReadDS->lokasi; ?></td>

      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editdata">
      Edit</button>

      <!--  tampilan hapus data -->
      <a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/KavlingDelete/'.$ReadDS->kd_blok); ?>" onclick="return confirm('are you sure?')">
          Delete
        </a>
    </tr>

    <?php	
    $nomor++;
		}
	}
	?>
   

        <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdata" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editdata">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="<?php echo site_url('Welcome/KavlingUpdate');?>" method="POST">
                    <div class="mb-3">
                    <label for="kd_blok" class="form-label">Kode Blok</label>
                    <input name="kd_blok" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="nama_blok" class="form-label">Nama Blok</label>
                    <input name="nama_blok" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="no_blok" class="form-label">Nomor Blok</label>
                    <input name="no_blok" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input name="lokasi" type="text" class="form-control" id="editData">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
             </div>
            </div>
        </div>
        <!-- tampilan akhir edit data  -->
        <div class="modal fade" id="hapusdata" tabindex="-1" aria-labelledby="hapusdata" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hapusdata">Konfirmasi Hapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda ingin menghapus data ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
      <!-- Tampilan akhir tabel  -->

</body>
</html>