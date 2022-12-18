<div>
  <div class="py-3">
    <a class="btn btn-warning" href="<?= base_url("/") ?>">Kembali</a>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="text-lg" for="fileExcel">Upload File Excel</label>
      <input class="form-control p-1" type="file" name="fileExcel" id="fileExcel">
    </div>
      <button class="btn btn-success btn-block" type="submit">Upload</button>
  </form>

  <table class="table table-dark mt-3" border="1" style="margin-right: auto; margin-left: auto;">
    <thead>
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
      </tr>
    </thead>
    <tbody>
      <?php if(!empty($barang)){foreach($barang as $item){ ?>
        <tr>
          <td><?php echo $item['kode'] ?></td>
          <td><?php echo $item['nama'] ?></td>
          <td>Rp. <?php echo $item['harga'] ?></td>
          <td>Rp. <?php echo ($item['harga'] + ($item['harga'] * 0.2)) ?></td>
        </tr>
      <?php }}else{ ?>
        <tr>
          <td colspan="4">Tidak ada data.</td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <form action="<?=base_url('barang/export')?>" method="post" enctype="multipart/form-data">
    <?php //$nilai = base64_encode(serialize($mahasiswa)); ?>
    <input type="hidden" name="result" value="<?php echo base64_encode(serialize($mahasiswa)) ?>">
    <button type="submit" class="btn btn-info btn-block" <?php if(empty($barang)){echo 'hidden';} ?>>Export Excel</button>
  </form>
</div>
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Chartjs -->
<script src="<?= base_url('plugins/chart.js/Chart.js') ?>"></script>