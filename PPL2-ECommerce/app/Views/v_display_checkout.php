<div class="container">
    <form action="<?= base_url('checkout-save') ?>" method="post">
      <div class="row mb-3">
        <label for="kode" class="form-label">Kode Transaksi</label>
        <input type="text" class="form-control" id="kode" name="kode" value="<?= $kode ?>" readonly>
      </div>
      <div class="row mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $tanggal ?>" readonly>
      </div>
      <div class="row mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="row mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
      </div>
      <div class="row mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
      </div>
      <div class="row mb-3">
        <label for="kota" class="form-label">Kota / Kabupaten</label>
        <input type="text" class="form-control" id="kota" name="kota">
      </div>
      <div class="row mb-3">
        <button type="submit" class="btn btn-success">Checkout</button>
      </div>
    </form>
</div>