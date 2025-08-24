<?php
?>
<section class="latest-news py-5">
    <div class="container">
        <h2 class="mb-4">Berita Terbaru</h2>
        <div class="row">
            <?php foreach ($artikels as $artikel): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/newsportal/images/artikel/<?= h($artikel->artikel_sampul) ?>" class="card-img-top" alt="<?= h($artikel->artikel_judul) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= h($artikel->artikel_judul) ?></h5>
                            <p class="card-text"><?= h($artikel->artikel_konten) ?></p>
                            <a href="<?= $this->Url->build(['action' => 'view', $artikel->artikel_id]) ?>" class="btn btn-outline-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>