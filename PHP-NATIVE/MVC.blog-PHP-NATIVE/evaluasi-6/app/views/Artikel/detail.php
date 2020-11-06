<?php
if (!$_SESSION['user']['status'] == 'Logged In') {
    header('Location: ' . BASEURL . '/Home');
}
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <?= $data['str']['kategori'] ?>
        </div>
        <div class="card-body">
            <cite title="Source Title"></cite>
            <blockquote class="blockquote mb-0"><?= $data['str']['judulArtikel'] ?></blockquote>
            <p class="card-text"><?= $data['str']['artikel'] ?></p>
            <footer class="blockquote-footer"><?= $data['str']['tanggal'] ?></footer>
            <a href="<?= BASEURL; ?>/Artikel" class="d-flex justify-content-between align-items-cente">Back</a>
            <?php foreach ($data['str'] as $kamu) : ?>
                <a href="<?= BASEURL; ?>/Blog/detail/<?= $kamu['id'] ?>" class="badge badge-warning float-right ml-2">Detail</a>
            <?php endforeach; ?>
        </div>
    </div>
</div>