<?php

// 1. Saat data dikirim menggunakan GET, data akan muncul pada URL
// setelah tanda ? sebagai query string.

// 2. GET tidak boleh digunakan untuk password atau data sensitif
// karena data tersebut dapat terlihat pada URL browser.

// 3. isset() digunakan untuk mengecek apakah suatu data sudah tersedia
// sebelum data tersebut digunakan.

if (isset($_POST['submit'])) {

    $nama       = $_POST['nama'] ?? '';
    $nis        = $_POST['nis'] ?? '';
    $email      = $_POST['email'] ?? '';
    $jurusan    = $_POST['jurusan'] ?? '';
    $perusahaan = $_POST['perusahaan'] ?? '';
    $alasan     = $_POST['alasan'] ?? '';

    if (empty($nama) || empty($nis)) {

        echo "<p>Nama dan NIS wajib diisi!</p>";

    } else {

        echo "<h2>Data Pendaftaran PKL</h2>";
        echo "Nama Lengkap: " . $nama . "<br>";
        echo "NIS: " . $nis . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Jurusan: " . $jurusan . "<br>";
        echo "Perusahaan PKL: " . $perusahaan . "<br>";

        if (isset($_POST['techstack'])) {
            echo "Tech Stack: " . implode(", ", $_POST['techstack']) . "<br>";
        } else {
            echo "Tech Stack: -<br>";
        }

        echo "Alasan: " . $alasan . "<br>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Peserta PKL</title>
</head>

<body>

    <h1>Form Pendaftaran Peserta PKL</h1>

    <form method="post">

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama">
        <br><br>

        <label>NIS:</label><br>
        <input type="number" name="nis">
        <br><br>

        <label>Email Siswa:</label><br>
        <input type="email" name="email">
        <br><br>

        <label>Kompetensi Keahlian / Jurusan:</label><br>

        <input type="radio" name="jurusan" value="RPL">
        RPL

        <input type="radio" name="jurusan" value="TKJ">
        TKJ

        <input type="radio" name="jurusan" value="DKV">
        DKV

        <br><br>

        <label>Perusahaan PKL:</label><br>

        <select name="perusahaan">
            <option value="PT Maju Jaya">PT Maju Jaya</option>
            <option value="CV Teknologi Indonesia">
                CV Teknologi Indonesia
            </option>
            <option value="PT Digital Nusantara">
                PT Digital Nusantara
            </option>
        </select>

        <br><br>

        <label>Kompetensi / Tech Stack:</label><br>

        <input type="checkbox" name="techstack[]" value="HTML">
        HTML

        <input type="checkbox" name="techstack[]" value="CSS">
        CSS

        <input type="checkbox" name="techstack[]" value="PHP">
        PHP

        <input type="checkbox" name="techstack[]" value="JavaScript">
        JavaScript

        <br><br>

        <label>Alasan Memilih Perusahaan:</label><br>

        <textarea name="alasan" rows="5" cols="40"></textarea>

        <br><br>

        <button type="submit" name="submit">
            Daftar PKL
        </button>

    </form>

</body>
</html>