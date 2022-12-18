<div>
  <div class="py-3">
    <a class="btn btn-warning" href="<?= base_url("/mahasiswa") ?>">Kembali</a>
  </div>
  <h1>Masukan Data Mahasiswa</h1>
  <div class="d-flex align-items-center justify-content-center">
    <img class="" src="<?= base_url('image/graduated.png') ?>" width="100px" height="100px">
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="text-lg" for="nim">NIM</label>
      <input class="form-control" type="text" name="nim" id="nim">
    </div>
    <div class="form-group">
      <label class="text-lg" for="nama">Nama</label>
      <input class="form-control" type="text" name="nama" id="nama">
    </div>
    <div class="form-group">
      <label class="text-lg" for="umur">Umur</label>
      <input class="form-control" type="text" name="umur" id="umur">
    </div>
    <div class="form-group">
      <label class="text-lg" for="foto">Foto</label>
      <input class="form-control" type="file" name="foto" id="foto">
    </div>
      <button class="btn btn-success btn-block" type="submit">Simpan</button>
  </form>
</div>