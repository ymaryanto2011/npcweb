<section class="latest-news py-5">
    <div class="container">
        <h2 class="mb-4">Berita Terbaru</h2>
        <div class="row">
            <?php foreach ($artikel as $article): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/newsportal/img/<?= h($article->image) ?>" class="card-img-top" alt="<?= h($article->title) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= h($article->title) ?></h5>
                            <p class="card-text"><?= h($article->summary) ?></p>
                            <a href="<?= $this->Url->build(['action' => 'view', $article->id]) ?>" class="btn btn-outline-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>