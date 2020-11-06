<div class="container">
</div>
<form action="<?= BASEURL; ?>/Login/masuk1" method="post">
    <div class="login-box">
        <h4><?php Flasher::login(); ?></h4>
        <h4><?php Flasher::sigup(); ?></h4>
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <label for="name"></label>
            <input type="text" placeholder="name" name="name" id="name" autocomplete="off">
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <label for="password"></label>
            <input type="password" placeholder="password" name="password" id="password" autocomplete="off">
        </div>
        <div>
            <button class="btn" type="submit" name="submit" value="submit" herf="<?= BASEURL; ?>/Artikel/detail/<?= $kamu['id'] ?>">Login</button>
            <a href="<?= BASEURL; ?>/Sigup"><button type="button" class="btn btn-primary tombolTambahData1">
                    Daftar
                </button></a>
        </div>
    </div>
</form>