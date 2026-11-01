<?php
$matkul = [
    ["nama" => "Pemrograman Web",   "sks" => 3, "nilai" => 88],
    ["nama" => "Basis Data",        "sks" => 3, "nilai" => 76],
    ["nama" => "Algoritma",         "sks" => 4, "nilai" => 58],
    ["nama" => "Jaringan Komputer", "sks" => 3, "nilai" => 72],
    ["nama" => "Statistika",        "sks" => 2, "nilai" => 91],
    ["nama" => "Sistem Operasi",    "sks" => 3, "nilai" => 85],
];

function hitungBobot($nilai)
{
    if ($nilai >= 85) {
        return ["huruf" => "A", "bobot" => 4.0];
    } elseif ($nilai >= 70) {
        return ["huruf" => "B", "bobot" => 3.0];
    } elseif ($nilai >= 55) {
        return ["huruf" => "C", "bobot" => 2.0];
    } elseif ($nilai >= 40) {
        return ["huruf" => "D", "bobot" => 1.0];    
    }
    return ["huruf" => "E", "bobot" => 0.0];
}

$totalSks = 0;
$totalMutu = 0;

echo "<h2>Daftar Nilai Mata Kuliah</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Nilai Angka</th>
        <th>Nilai Huruf</th>
        <th>Status</th>
      </tr>";

foreach ($matkul as $i => $mk) {
    $hasil  = hitungBobot($mk["nilai"]);
    $status = ($hasil["bobot"] >= 2.0) ? "LULUS" : "MENGULANG";

    $totalSks  += $mk["sks"];
    $totalMutu += $hasil["bobot"] * $mk["sks"];

    $style = ($status == "MENGULANG") ? "style='background-color:red; color:white;'" : "";

    echo "<tr $style>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $mk["nama"] . "</td>";
    echo "<td>" . $mk["sks"] . "</td>";
    echo "<td>" . $mk["nilai"] . "</td>";
    echo "<td>" . $hasil["huruf"] . "</td>";
    echo "<td>" . $status . "</td>";
    echo "</tr>";
}
echo "</table>";

$ips = $totalMutu / $totalSks;

echo "<h3>Ringkasan IPS</h3>";
echo "Total SKS : " . $totalSks . "<br>";
echo "Total Mutu : " . number_format($totalMutu, 2) . "<br>";
echo "IPS : " . number_format($ips, 2) . "<br>";

$maksSks = ($ips >= 3.00) ? 24 : 20;
echo "Batas maksimal SKS semester depan : " . $maksSks . " SKS";
?>
