<?php
if ($_SESSION['user']['status'] != 'Logged In') {
    header('Location: ' . BASEURL . '/home');
}
?>
<div class="container">
    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa fa-tachometer-alt mr-2">Admin</i></h3>
        <hr>
        <?php foreach ($data['str'] as $kamu) : ?>

            <div>
                <div class="card bg-warning ml-5" style="width: 18rem; float: left; margin:top;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </div>
                        <h5 class="card-title-top"><?= $kamu['name'] ?> </h5>
                        <div class="display-3"><?= $kamu['id'] ?></div>
                        <a href="<?= BASEURL; ?>/Admin/detailUser/<?= $kamu['id']; ?>">
                            <p class="card-text text-white">Lihat Detail <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>