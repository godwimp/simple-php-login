<?php
    // Start the session
    session_start();

    // Include connection
    include 'koneksi.php';

    // Get username and password from form
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Query the database for the username and password
    $query = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

    // Check if the query returned any results
    $cek = mysqli_num_rows($query);
    if ($cek > 0) {
        echo "Anda berhasil login. Silahkan menuju <br><br>";
        echo "<center><b><font size='16px'>Halaman Beranda</font></b></center>";
    } else {
        echo "Anda gagal login, silahkan <a href='index.html'>Login kembali</a>";
        echo mysqli_error($con);
    }
?>