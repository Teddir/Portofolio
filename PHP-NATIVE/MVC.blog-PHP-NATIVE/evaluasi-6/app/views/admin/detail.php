<div class="row">
    <div class="card bg-none ml-5" style="width: 70rem;">
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fa fa-tachometer-alt mr-2">Dashbord</i></h3>
            <p><?php Flasher::flash(); ?></p>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th>kategori</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $i = 1 ?>
                <?php foreach ($data['str'] as $kamu) : ?>
                    <tbody>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $kamu['judulArtikel'] ?></td>
                            <td><?= $kamu['kategori'] ?></td>
                            <td><?= $kamu['tanggal'] ?></td>
                            <td><a href="<?= BASEURL; ?>/Artikel/hapus/<?= $kamu['id'] ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin');">Hapus</a>
                                <a href="<?= BASEURL; ?>/Santri/ubah/<?= $kamu['id'] ?>" class="badge badge-primary float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#modal" data-id="<?= $kamu['id']; ?>">Update</a>
                                <a href="<?= BASEURL; ?>/Blog/detail/<?= $kamu['id'] ?>" class="badge badge-warning float-right ml-2">Detail</a></td>
                        </tr>
                    </tbody>
                    <?php $i++ ?>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

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