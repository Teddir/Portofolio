<?php
class Flasher
{
  public static function setFlash($pesan, $aksi, $tipe)
  {
    $_SESSION['flash'] =
      [
        'pesan' => $pesan,
        'aksi' => $aksi,
        'tipe' => $tipe
      ];
  }

  public static function setSigup($pesan, $aksi, $tipe)
  {
    $_SESSION['sigup'] =
      [
        'pesan' => $pesan,
        'aksi' => $aksi,
        'tipe' => $tipe
      ];
  }

  public static function setLogin($pesan, $aksi, $tipe)
  {
    $_SESSION['login'] =
      [
        'pesan' => $pesan,
        'aksi' => $aksi,
        'tipe' => $tipe
      ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Artikel <strong>' . $_SESSION['flash']['pesan'] . '</strong>' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['flash']);
    }
  }

  public static function sigup()
  {
    if (isset($_SESSION['sigup'])) {
      echo '<div class="alert alert-' . $_SESSION['sigup']['tipe'] . ' alert-dismissible fade show" role="alert">
            Registrasi <strong>' . $_SESSION['sigup']['pesan'] . '</strong>' . $_SESSION['sigup']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['sigup']);
    }
  }

  public static function login()
  {
    if (isset($_SESSION['login'])) {
      echo '<div class="alert alert-' . $_SESSION['login']['tipe'] . ' alert-dismissible fade show" role="alert">
            Login <strong>' . $_SESSION['login']['pesan'] . '</strong>' . $_SESSION['login']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      unset($_SESSION['login']);
    }
  }
}
