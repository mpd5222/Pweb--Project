<div class="flex-container">
<?php foreach ($data['berita'] as $brt): ?>
  <div>
    <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="<?= BASEURL; ?>/assets/images/<?= $brt['foto_berita'] ?>.jpeg" alt="foto tidak berhasil dimuat">
        <div class="card-body">
            <h5 class="card-title"><?= $brt['judul_berita'] ?></h5>
            <p class="card-text"><?= $brt['deskripsi'] ?></p>
        </div>
    </div>
  </div>   
  <?php endforeach; ?>
</div>

