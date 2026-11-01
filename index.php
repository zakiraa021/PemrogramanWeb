    <?php
    $nama = "Ibnu Zaki";
    $nim = 3337250157;
    $ipk = 3.85;
    $aktif = true;

    $skills = ["HTML", "CSS", "PHP"];

    echo "Halo, " . $nama . " NIM Anda " . $nim . "<br>";
    echo "Halo, {$nama} NIM Anda {$nim}, IPK Anda semester ini {$ipk}<br><br>";

    echo "<b>Daftar Skills</b><br>";
    foreach ($skills as $s){
        echo "- " . $s . "<br>";
    }
    ?>