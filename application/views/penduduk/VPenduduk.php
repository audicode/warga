<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="card">
  <h5 class="card-header">Form Data Penduduk</h5>
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
      <form action="<?php echo site_url('Welcome/PendudukInsert');?>" method="POST">
        <div class="mb-3">
         <label for="kd_penduduk" class="form-label">Kode Penduduk</label>
         <input name="kd_penduduk" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="nik" class="form-label">Nik</label>
         <input name="nik" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="nama" class="form-label">Nama</label>
         <input name="nama" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
         <input name="tempat_lahir" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
         <input name="tgl_lahir" type="date" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
                    <label for="status1" class="form-label">Status 1</label>
                    <select name="status1" id="status1" class="form-control">
                        <option value="menikah">Menikah</option>
                        <option value="belum menikah">Belum Menikah</option>
                        <option value="janda">Janda</option>
                        <option value="duda">duda</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="status2" class="form-label">Status 2</label>
                    <select name="status2" id="status2" class="form-control">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="status3" class="form-label">Status 3</label>
                    <select name="status3" id="status3" class="form-control">
                        <option value="kepala keluarga">Kepala keluarga</option>
                        <option value="istri">Istri</option>
                        <option value="anak">Anak</option>
                        <option value="orangtua">OrangTua</option>
                        <option value="saudara">Saudara</option>
                    </select>
                    </div>
        <div class="mb-3">
         <label for="kd_blok" class="form-label">Kode Blok</label>
         <input name="kd_blok" type="text" class="form-control" id="updateData">
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
      <th scope="col">Kode Penduduk</th>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Status 1</th>
      <th scope="col">Status 2</th>
      <th scope="col">Status 3</th>
      <th scope="col">Kode Blok</th>
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
		<td><?php echo $ReadDS->kd_penduduk; ?></td>
		<td><?php echo $ReadDS->nik; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->tempat_lahir; ?></td>
    <td><?php echo $ReadDS->tgl_lahir; ?></td>
    <td><?php echo $ReadDS->status1; ?></td>
    <td><?php echo $ReadDS->status2; ?></td>
    <td><?php echo $ReadDS->status3; ?></td>
    <td><?php echo $ReadDS->kd_blok; ?></td>

      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-nik="<?php echo $ReadDS->nik; ?>" 
                                                                           data-kd_penduduk="<?php echo $ReadDS->kd_penduduk; ?>" 
                                                                           data-nama="<?php echo $ReadDS->nama; ?>"  
                                                                           data-tempat_lahir="<?php echo $ReadDS->tempat_lahir; ?>" 
                                                                           data-tgl_lahir="<?php echo $ReadDS->tgl_lahir; ?>"
                                                                           data-kd_blok="<?php echo $ReadDS->kd_blok; ?>"
      data-bs-target="#editdata">
      Edit</button>

      <!--  tampilan hapus data -->
      <a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/PendudukDelete/'.$ReadDS->kd_penduduk); ?>" onclick="return confirm('are you sure?')">
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
      <div class="modal-body" id="modal-body">
      loading...
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

      <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
     
     <script>

      $('#editdata').on('shown.bs.modal', function(e) {
        var html=`<form action="<?php echo site_url('Welcome/PendudukUpdate');?>" method="POST">
                    <div class="mb-3">
                    <label for="kd_penduduk" class="form-label">Kode Penduduk</label>
                    <input name="kd_penduduk" type="text" class="form-control" value="${$(e.relatedTarget).data('kd_penduduk')}" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="nik" class="form-label">Nik</label>
                    <input name="nik" type="text" class="form-control" value="${$(e.relatedTarget).data('nik')}" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" value="${$(e.relatedTarget).data('nama')}" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" value="${$(e.relatedTarget).data('tempat_lahir')}" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" value="${$(e.relatedTarget).data('tgl_lahir')}" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="status1" class="form-label">Status 1</label>
                    <select name="status1" id="status1" class="form-control">
                        <option value="menikah" ${$(e.relatedTarget).data('status1') == 'menikah' ? 'selected' : ''} >Menikah</option>
                        <option value="belum menikah" ${$(e.relatedTarget).data('status1') == 'belum menikah' ? 'selected' : ''} >Belum Menikah</option>
                        <option value="janda" ${$(e.relatedTarget).data('status1') == 'janda' ? 'selected' : ''} >Janda</option>
                        <option value="duda" ${$(e.relatedTarget).data('status1') == 'duda' ? 'selected' : ''} >duda</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="status2" class="form-label">Status 2</label>
                    <select name="status2" id="status2" class="form-control">
                        <option value="laki-laki" ${$(e.relatedTarget).data('status2') == 'laki-laki' ? 'selected' : ''}>Laki-laki</option>
                        <option value="perempuan" ${$(e.relatedTarget).data('status2') == 'perempuan' ? 'selected' : ''}>Perempuan</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="status3" class="form-label">Status 3</label>
                    <select name="status3" id="status3" class="form-control">
                        <option value="kepala keluarga">Kepala keluarga</option>
                        <option value="istri">Istri</option>
                        <option value="anak">Anak</option>
                        <option value="orangtua">OrangTua</option>
                        <option value="saudara">Saudara</option>
                        <option value="saudara">Tinggal Sendiri</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <label for="kd_blok" class="form-label">Kode Blok</label>
                    <input name="kd_blok" type="text" class="form-control" value="${$(e.relatedTarget).data('kd_blok')}" id="editData">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>`;
                $('#modal-body').html(html)
   })
   </script>
</body>
  </html>