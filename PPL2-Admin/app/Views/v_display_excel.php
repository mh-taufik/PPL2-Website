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
        <th>NIM</th>
        <th>Nama</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Nilai Akhir</th>
      </tr>
    </thead>
    <tbody>
      <?php if(!empty($mahasiswa)){foreach($mahasiswa as $item){ ?>
        <tr>
          <td><?php echo $item['nim'] ?></td>
          <td><?php echo $item['nama'] ?></td>
          <td><?php echo $item['uts'] ?></td>
          <td><?php echo $item['uas'] ?></td>
          <td><?php echo ($item['uas'] + $item['uts'])/2 ?></td>
        </tr>
      <?php }}else{ ?>
        <tr>
          <td colspan="4">Tidak ada data.</td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
    <?php empty($mahasiswa) ? 'disabled' : '' ?>
</div>
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Chartjs -->
<script src="<?= base_url('plugins/chart.js/Chart.js') ?>"></script>