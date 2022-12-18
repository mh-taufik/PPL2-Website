<div class="container">
<div class="py-3">
    <a class="btn btn-warning" href="<?= base_url("/mahasiswa") ?>">Kembali</a>
  </div>
  <div>
    <form action="" method="post">
      <div class="form-group">
        <label class="text-lg" for="nim">NIM</label>
        <input class="form-control" readonly type="text" name="nim" id="nim" value="<?php echo $mahasiswa['nim'] ?>">
      </div>
      <div class="form-group">
        <label class="text-lg" for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $mahasiswa['nama'] ?>">
      </div>
      <div class="form-group">
        <label class="text-lg" for="umur">Umur</label>
        <input class="form-control" type="text" name="umur" id="umur" value="<?php echo $mahasiswa['umur'] ?>">
      </div>
        <button class="btn btn-success btn-block" type="submit">Simpan</button>
    </form>
  </div>
</div>

  