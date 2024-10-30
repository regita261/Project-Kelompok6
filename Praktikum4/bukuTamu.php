<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Buku Tamu</h1>
    
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan" rows="4" required></textarea><br><br>
        
        <input type="submit" value="Kirim">
    </form>

    <h2>Daftar Tamu</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
        </tr>
        
        <?php
        // File untuk menyimpan data tamu
        $file = 'data_tamu.json';
        
        // Membaca data tamu dari file
        $data_tamu = [];
        if (file_exists($file)) {
            $data_tamu = json_decode(file_get_contents($file), true);
        }

        // Menampilkan data tamu
        foreach ($data_tamu as $index => $tamu) {
            echo "<tr>";
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td>" . htmlspecialchars($tamu['nama']) . "</td>";
            echo "<td>" . htmlspecialchars($tamu['email']) . "</td>";
            echo "<td>" . htmlspecialchars($tamu['pesan']) . "</td>";
            echo "</tr>";
        }

        // Menangani form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $pesan = $_POST['pesan'];

            // Menambahkan data tamu baru
            $data_tamu[] = [
                'nama' => $nama,
                'email' => $email,
                'pesan' => $pesan
            ];

            // Menyimpan data tamu ke file
            file_put_contents($file, json_encode($data_tamu));

            // Refresh halaman untuk menampilkan data terbaru
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
        ?>
    </table>
</body>
</html>