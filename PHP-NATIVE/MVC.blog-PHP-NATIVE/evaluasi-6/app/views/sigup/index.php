<div class="container">
    <div class="card">
        <div class="card-body bg-none">
            <form action="<?= BASEURL; ?>/Sigup/tambah" method="post">
                <div class="login-box">
                    <h4><?php Flasher::sigup(); ?></h4>
                    <h1>Register</h1>
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

                    <button class="btn" type="submit" name="submit" value="submit" herf="<?= BASEURL; ?>/Login<?= $kamu['id'] ?>">Daftar</button>
                    <i class="fa fa-spinner" aria-hidden="true"><a href="<?= BASEURL; ?>/Login">Login</a></i>
                </div>
            </form>
        </div>
    </div>
</div>