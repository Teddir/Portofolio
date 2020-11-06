<?php
// if (!$_SESSION['user']['status'] == 'Logged In') {
//     header('Location: ' . BASEURL . '/home');
// } else {
//     header('Location: ' . BASEURL . '/Home');
// } 
?>
<div class="row">
    <div class="col-6">
        <h3>Kategori Artikel</h3>
        <ul class="list-group">
            <?php foreach ($data['str'] as $kamu) : ?>
                <li class="list-group-item ">
                    <?= $kamu['kategori'] ?>
                    <a href="<?= BASEURL; ?>/Artikel/hapus/<?= $kamu['id'] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin');">Hapus</a>
                    <a href="<?= BASEURL; ?>/Artikel/update/<?= $kamu['id'] ?>" class="badge badge-primary float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#modal" data-id="<?= $kamu['id']; ?>">Update</a>
                    <a href="<?= BASEURL; ?>/Blog/detail/<?= $kamu['id'] ?>" class="badge badge-warning float-right ml-2">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>