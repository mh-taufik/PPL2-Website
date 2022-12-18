<div>
  <div class="py-3">
    <a class="btn btn-warning" href="<?= base_url("/") ?>">Kembali</a>
  </div>
  <form action="">
      <div class="input-group">
      <input class="form-control form-control-lg" type="text" name="q" id="q" value="<?php echo $params ?>">
      <div class="input-group-append">
        <input class="btn btn-info btn-lg" type="submit" name="cari" value="Cari"></input>
      </div>
      </div>
  </form>
  <div class="py-3">
    <a class="btn btn-success btn-block" href="<?= base_url("mahasiswa/insert") ?>">Tambah Mahasiswa</a>
  </div>
  <!-- BAR CHART -->
  <div class="card card-light">
    <div class="card-header">
      <h3 class="card-title">Grafik Umur Mahasiswa</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="chart">
        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <table class="table table-dark" border="1" style="margin-right: auto; margin-left: auto;">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($mahasiswa as $item){ ?>
        <tr>
          <td><?php echo $item['nim'] ?></td>
          <td><?php echo $item['nama'] ?></td>
          <td><?php echo $item['umur'] ?></td>
          <td><img src="<?php echo base_url('image/mhs/'.$item['foto']) ?>" alt="" width="100px" height="150px"></td>
          <td>
            <a class="btn btn-info" href="<?= base_url("mahasiswa/detail/".$item['nim']) ?>">Detail</a>
            <a class="btn btn-warning" href="<?= base_url("mahasiswa/edit/".$item['nim']) ?>">Edit</a>
            <a class="btn btn-danger" href="<?= base_url("mahasiswa/delete/".$item['nim']) ?>">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Chartjs -->
<script src="<?= base_url('plugins/chart.js/Chart.js') ?>"></script>

<script>
  $(function () {
    console.log(<?php foreach($data_grafik as $item){echo $item['jumlah'];} ?>);
    var areaChartData = {
        // labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July',],
        labels  : [<?php foreach($data_grafik as $item){echo "'".$item['nama']."',";} ?>],
        datasets: [
          {
            label               : 'Umur',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
            data                : [<?php foreach($data_grafik as $item){echo $item['umur'].",";} ?>]
          }
        ]
      }
      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = $.extend(true, {}, areaChartData)
      barChartData.datasets[0] = areaChartData.datasets[0]

      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
      }

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })
    }
  )
</script>