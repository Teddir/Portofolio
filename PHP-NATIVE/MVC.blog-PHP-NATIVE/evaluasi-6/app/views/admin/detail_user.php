<?php
// if (!$_SESSION['admin']['status'] == 'Logged In') {
//     header('Location: ' . BASEURL . '/home');
// } 
?>
<div class="col-md-10 p-5 pt-2">
    <h3><i class="fa fa-tachometer-alt mr-2">Detail</i></h3>
    <hr>

    <div class="row">
        <div class="card bg-warning ml-5" style="width: 30rem;">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                </div>
                <h5 class="card-title">Nama :<?= $data['str']['name']; ?></h5>
                <h5 class="card-title">Password: <?= $data['str']['password']; ?></h5>
                <a href="<?= BASEURL; ?>/Admin/user">
                    <p class="card-text text-white">Back <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>