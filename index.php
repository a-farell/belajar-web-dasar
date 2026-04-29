<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Web Dasar</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<h2>Halaman Utama</h2>
<p>Selamat datang di website saya</p>


<h2>Contact</h2>

<form method="POST">
    Nama: <input type="text" name="nama">
    <button type="submit">Kirim</button>
</form>


<h2>About</h2>

    <main>

        <section>
            <h2>Data Mahasiswa</h2>
            <p>Nama: Farel Anwar</p>
            <p>Prodi: Teknik Informatika</p>
            <p>NIM: 2430511047</p>
        </section>

        <section>
            <h2>Hobi Saya</h2>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Hobi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Main game</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Menyanyi</td>
                </tr>
            </table>
        </section>

        <section>
            <h2>Form Kontak</h2>

            <p id="status">Isi dulu datanya</p>

            <form>
                <label>Nama:</label>
                <input type="text" id="nama">

                <label>Email:</label>
                <input type="email" required>

                <button type="button" onclick="kirim()">Kirim</button>
            </form>
        </section>

        <section>
            <h2>Hitung Nilai</h2>

            <input type="number" id="tugas" placeholder="nilai tugas">
            <input type="number" id="uts" placeholder="nilai uts">
            <input type="number" id="uas" placeholder="nilai uas">

            <button onclick="hitung()">Hitung</button>

            <p id="hasil"></p>
        </section>

    </main>
    <?php

echo 'Hello, World';

$data = 'Pemrogaman Web';
$number = 10;
echo "<br />";
echo $data;
echo "<br />";
echo $number;

$dataMahasiswa = ['zios', 'dimas', 'abuy'];

array_push($dataMahasiswa, 'zios');
echo "<br />";
echo $dataMahasiswa[3];

$a = 30;
$b = 35;

echo "<br />";
echo $a * $b;

if ($a < $b) {
    echo '<br />';
    echo 'benar (true)';
}else{
    echo '<br />';
    echo 'salah (false)';
}

$c = 58;
$d = 50;
if ($a != $b && $c < $d){
    echo '<br />';
    echo 'benar (true)';
}else {
    echo '<br />';
    echo 'salah (false)';
}

if ($a != $b || $c < $d){
    echo '<br />';
    echo 'benar (true)';
}else {
    echo '<br />';
    echo 'salah (false)';
}


$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari kerja";
        break;
    case "Minggu":
        echo "Libur";
        break;
}
?>

    <footer>
        <p>2026 - Teknik Informatika</p>
    </footer>

    <script src="javascript.js"></script>

    

</body>
</html>