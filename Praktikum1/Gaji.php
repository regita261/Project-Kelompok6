<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Gaji Karyawan</title>
</head>
<body>

    <h1>Form Input Gaji Karyawan</h1>
    <form method="post" action="">
        <label for="nama">Nama Karyawan:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="gajiPokok">Gaji Pokok:</label><br>
        <input type="number" id="gajiPokok" name="gajiPokok" required><br><br>

        <label for="potongan">Potongan:</label><br>
        <input type="number" id="potongan" name="potongan" required><br><br>

        <input type="submit" value="Hitung Gaji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama = $_POST['nama'];
        $gajiPokok = $_POST['gajiPokok'];
        $potongan = $_POST['potongan'];

        // Menghitung gaji bersih
        $gajiBersih = $gajiPokok - $potongan;

        // Menampilkan hasil
        echo "<h2>Hasil Penghitungan Gaji</h2>";
        echo "Nama Karyawan: " . htmlspecialchars($nama) . "<br>";
        echo "Gaji Pokok: Rp " . number_format($gajiPokok, 2, ',', '.') . "<br>";
        echo "Potongan: Rp " . number_format($potongan, 2, ',', '.') . "<br>";
        echo "Gaji Bersih: Rp " . number_format($gajiBersih, 2, ',', '.') . "<br>";
    }
    ?>

</body>
</html>