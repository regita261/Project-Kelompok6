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
        <label for="nama">Nama Karyawan:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="jabatan">Jabatan:</label><br>
        <select id="jabatan" name="jabatan" required>
            <option value="">Pilih Jabatan</option>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Staff">Staff</option>
        </select><br><br>

        <label for="masaKerja">Masa Kerja (tahun):</label><br>
        <input type="number" id="masaKerja" name="masaKerja" required><br><br>

        <label for="gajiPokok">Gaji Pokok:</label><br>
        <input type="number" id="gajiPokok" name="gajiPokok" required><br><br>

       

        <input type="submit" value="Hitung Gaji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $masaKerja = $_POST['masaKerja'];
        $gajiPokok = $_POST['gajiPokok'];


        // Menghitung tunjangan jabatan
        if ($jabatan == "Manager") {
            $tunjanganJabatan = $gajiPokok * 0.2;
        } elseif ($jabatan == "Supervisor") {
            $tunjanganJabatan = $gajiPokok * 0.15;
        } else {
            $tunjanganJabatan = $gajiPokok * 0.1;
        }

        // Menghitung tunjangan masa kerja
        if ($masaKerja >= 5 && $masaKerja < 10) {
            $tunjanganMasaKerja = $gajiPokok * 0.05;
        } elseif ($masaKerja >= 10) {
            $tunjanganMasaKerja = $gajiPokok * 0.1;
        } else {
            $tunjanganMasaKerja = 0;
        }

        

        // Menghitung total gaji
        $totalGaji = $gajiPokok + $tunjanganJabatan + $tunjanganMasaKerja ;

        // Menampilkan hasil
        echo "<h2>Hasil Penghitungan Gaji</h2>";
        echo "Nama Karyawan: " . $nama . " <br>";
        echo "Jabatan: " . htmlspecialchars($jabatan) . "<br>";
        echo "Masa Kerja: " . $masaKerja . " tahun<br>";
        echo "Gaji Pokok: Rp " . number_format($gajiPokok, 2, ',', '.') . "<br>";
       
        echo "Tunjangan Jabatan: Rp " . number_format($tunjanganJabatan, 2, ',', '.') . "<br>";
        echo "Tunjangan Masa Kerja: Rp " . number_format($tunjanganMasaKerja, 2, ',', '.') . "<br>";
        echo "Total Gaji: Rp " . number_format($totalGaji, 2, ',', '.') . "<br>";
    }
    ?>

</body>
</html>