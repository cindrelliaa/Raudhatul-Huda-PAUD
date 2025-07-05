<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $namaLengkap = $_POST['nama-lengkap'] ?? '';
        $namaPanggilan = $_POST['nama-panggilan'] ?? '';
        $jenisKelamin = $_POST['jenis-kelamin'] ?? '';
        $tanggalLahir = $_POST['tempat-tanggal-lahir'] ?? '';
        $alamatLengkap = $_POST['alamat-lengkap'] ?? '';
        $agama = $_POST['agama'] ?? '';
        $anakKeberapa = $_POST['anak-keberapa'] ?? '';
        $jumlahSaudara = $_POST['jumlah-saudara-kandung'] ?? '';
        $namaAyah = $_POST['nama-ayah'] ?? '';
        $pekerjaanAyah = $_POST['pekerjaan-ayah'] ?? '';
        $namaIbu = $_POST['nama-ibu'] ?? '';
        $pekerjaanIbu = $_POST['pekerjaan-ibu'] ?? '';
    
        // Format pesan WhatsApp
        $pesan = "📝 *PENDAFTARAN RA ROUDLOTUL HUDA* 📝\n\n";
        $pesan .= "🔹 *Nama Lengkap:* $namaLengkap\n";
        $pesan .= "🔹 *Nama Panggilan:* $namaPanggilan\n";
        $pesan .= "🔹 *Jenis Kelamin:* $jenisKelamin\n";
        $pesan .= "🔹 *Tanggal Lahir:* $tanggalLahir\n";
        $pesan .= "🔹 *Alamat Lengkap:* $alamatLengkap\n";
        $pesan .= "🔹 *Agama:* $agama\n";
        $pesan .= "🔹 *Anak Ke:* $anakKeberapa\n";
        $pesan .= "🔹 *Jumlah Saudara Kandung:* $jumlahSaudara\n\n";
        $pesan .= "👨 *Nama Ayah:* $namaAyah\n";
        $pesan .= "👨 *Pekerjaan Ayah:* $pekerjaanAyah\n\n";
        $pesan .= "👩 *Nama Ibu:* $namaIbu\n";
        $pesan .= "👩 *Pekerjaan Ibu:* $pekerjaanIbu\n\n";
        $pesan .= "✅ Datamu telah dikirim melalui formulir pendaftaran online.\n\n";
        $pesan .= "📞 Silakan tunggu untuk informasi lebih lanjut.";
    
        // Encode pesan untuk URL
        $pesan = urlencode($pesan);
    
        // Nomor WhatsApp tujuan
        $nomorWhatsApp = "6289668477302"; 
    
        // Redirect ke WhatsApp
        $waUrl = "https://wa.me/$nomorWhatsApp?text=$pesan";
        header("Location: $waUrl");
        exit();
    }
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran TK/RA Roudlotul Huda</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet" />
    <link rel="stylesheet" href="styleform.css" />

    <!-- font -->
    <link
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  </head>
  <body>

    <div class="container mt-5">
        <h2 class="text-center">FORMULIR PENDAFTARAN RA ROUDLOTUL HUDA</h2>
        <form action="formulir.php" method="POST">
            <!-- Bagian Anak -->
            <h4>A. Identitas Anak</h4>
            <div class="form-group">
                <label for="nama-lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" required>
            </div>
            <div class="form-group">
                <label for="nama-panggilan">Nama Panggilan</label>
                <input type="text" class="form-control" id="nama-panggilan" name="nama-panggilan" required>
            </div>
            <div class="form-group">
                <label for="jenis-kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis-kelamin" name="jenis-kelamin" required>
                    <option value="">Pilih</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempat-tanggal-lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tempat-tanggal-lahir" name="tempat-tanggal-lahir" required>
            </div>
            <div class="form-group">
                <label for="alamat-lengkap">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat-lengkap" name="alamat-lengkap" required></textarea>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama" required>
                    <option value="">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Katholik">Budha</option>
                    <option value="Katholik">Hindu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="anak-keberapa">Anak Ke-</label>
                <input type="number" class="form-control" id="anak-keberapa" name="anak-keberapa" required>
            </div>
            <div class="form-group">
                <label for="jumlah-saudara-kandung">Jumlah Saudara Kandung</label>
                <input type="number" class="form-control" id="jumlah-saudara-kandung" name="jumlah-saudara-kandung" required>
            </div>

            <!-- Bagian Orang Tua -->
            <h4>B. Identitas Orang Tua</h4>
            <div class="form-group">
                <label for="nama-ayah">Nama Ayah</label>
                <input type="text" class="form-control" id="nama-ayah" name="nama-ayah" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan-ayah">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="pekerjaan-ayah" name="pekerjaan-ayah" required>
            </div>
            <div class="form-group">
                <label for="nama-ibu">Nama Ibu</label>
                <input type="text" class="form-control" id="nama-ibu" name="nama-ibu" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan-ibu">Pekerjaan Ibu</label>
                <input type="text" class="form-control" id="pekerjaan-ibu" name="pekerjaan-ibu" required>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
    
</html>
