<?php
    $Nama = $_POST['Nama'];
    $NIM = $_POST['NIM'];
    $Gender = $_POST['Gender'];
    $Kelas = $_POST['Kelas'];
    $Email = $_POST['Email'];
    $Saran = $_POST['Saran'];

    // Database connection
    $conn = mysqli_connect('localhost', 'root', '', 'contactForm');
    if (!$conn) {
        echo "salah8";
        die("Connection Failed : " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM `contactForm`";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
      echo "salah8";

        die('SQL Error: ' . mysqli_error($conn));
    }
?>