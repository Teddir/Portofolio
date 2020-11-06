<?php
// if (!$_SESSION['admin']['status'] == 'Logged In') {
//     header('Location: ' . BASEURL . '/home');
// } 
?>
<!-- Crud artikel -->
<div class="container">
    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa fa-tachometer-alt float-center">Pengaturan</i></h3>
        <p><?php Flasher::flash(); ?></p>
        <hr>


        <div class="row">
            <div class="card bg- ml-5" style="width: 70rem;">
                <form action="<?= BASEURL; ?>/Artikel/tambah" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
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
                    <div class="form-group">
                        <label for="judulArtikel">Judul Artikel</label>
                        <input type="textarea" class="form-control" id="judulArtikel" name="judulArtikel" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="artikel">Isi Artikel</label>
                        <textarea type="text" class="form-control" rows="5" id="artikel" name="artikel" placeholder="....."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="name@example.com">
                    </div>
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">Choose file...</label>
                        <input type="file" class="custom-file-input" id="image" name="image">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="update">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>