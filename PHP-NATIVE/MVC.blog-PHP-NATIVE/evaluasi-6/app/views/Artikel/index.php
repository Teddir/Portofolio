<?php
if (!$_SESSION['user']['status'] == 'Logged In') {
    header('Location: ' . BASEURL . '/Home');
}
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#modal">
                Tambah Data
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/Artikel/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Artikel..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Kategori Artikel</h3>
            <ul class="list-group">
                <?php foreach ($data['str'] as $kamu) : ?>
                    <li class="list-group-item ">
                        <?= substr($kamu['judulArtikel'], 0, 11,) ?>
                        <a href="<?= BASEURL; ?>/Santri/ubah/<?= $kamu['id'] ?>" class="badge badge-primary float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#modal" data-id="<?= $kamu['id']; ?>">Update</a>
                        <a href="<?= BASEURL; ?>/Blog/detail/<?= $kamu['id'] ?>" class="badge badge-warning float-right ml-2">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul> <br>
            <a href="<?= BASEURL; ?>/Blog" class="btn btn-primary float-right ml-2 "><i class="fa fa-long-arrow-left" aria-hidden="true">
                    Back</i></a>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/Artikel/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="img" class="form-control" id="image" name="image" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="judulArtikel">Judul Artikel</label>
                        <input type="text" class="form-control" id="judulArtikel" name="judulArtikel" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="artikel">Isi Artikel</label>
                        <input type="text" class="form-control" id="artikel" name="artikel" placeholder=".....">
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Artikel</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value="Agama">Agama</option>
                            <option value="Pendidikan">Pendidikan</option>
                            </option>
                            <option value="Sejarah">Sejarah</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>