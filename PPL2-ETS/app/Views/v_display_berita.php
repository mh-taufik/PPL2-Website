<div class="py-3">
    <a class="btn btn-warning" href="<?= base_url("/") ?>">Kembali</a>
</div>
<div class="container-sm">
  <?php foreach($berita as $item){ ?>
    <div class="row bg-dark">
      <div class="col-4" style="max-width: 100%; width: auto; height: 100%;">
        <img src="<?= base_url('image/berita/'.$item['gambar']) ?>" alt="" width="300" height="150">
      </div>
      <div class="col">
        <h3><?= $item['judul'] ?></h3>
      </div>
    </div>
    <br>
  <?php } ?>
</div>