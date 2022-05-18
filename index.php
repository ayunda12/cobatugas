<?php
include("config.php");
if (isset($_POST["newAccountUsername"])) {

    $nama = mysqli_real_escape_string($connection, $_POST["newAccountNama"]);
    $username = mysqli_real_escape_string($connection, $_POST["newAccountUsername"]);
    $notelp = mysqli_real_escape_string($connection, $_POST["newAccountNotelp"]);
    $alamat = mysqli_real_escape_string($connection, $_POST["newAccountAlamat"]);
    if ($username != "" && $nama != "" && $notelp != "" && $alamat != "") {
    if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM profil WHERE username = '$username'")) == 0) {
        //
        mysqli_query($connection, "INSERT INTO profil(nama,username,notelp,alamat) VALUES('$nama','$username','$notelp','$alamat')");
        mysqli_query($connection, "UPDATE profil SET nama = 'Alfred Schmidt', alamat= 'Frankfurt' WHERE username ='qq'");
        //echo 1;
        echo "Nama:" . $nama . " ,Username:" . $username . " ,NoTelp:" . $notelp . " ,Alamat:" . $alamat;
    } else {
        //echo 2;
        echo "Data dengan username ini sudah ada, silahkan gunakan username lain.";
    }
    } else {
        //echo 3;
        echo "Mohon lengkapi data terlebih dahulu";
    }
} else {
    echo "Menu profil";
}
