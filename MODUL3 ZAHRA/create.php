<<<<<<< HEAD
<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
//

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST)) {
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama_mobil = $_POST['nama_mobil'];

    // b. Ambil data brand mobil
    $brand_mobil = $_POST['brand_mobil'];

    // c. Ambil data warna mobil
    $warna_mobil = $_POST['warna_mobil'];

    // d. Ambil data tipe mobil
    $tipe_mobil = $_POST['tipe_mobil'];

    // e. Ambil data harga mobil
    $harga_mobil = $_POST['harga_mobil'];

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $tambah_data = mysqli_query($koneksi, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
                                    VALUES('$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')");

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if($tambah_data) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        //echo "<meta http-equiv='refresh' content='1 url=connect.php'>";
    } 

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya
    else {
        echo "<script>alert('Error: ')</script>";
        //echo "<meta http-equiv='refresh' content='1 url=connect.php'>";
    } 
}
// (7) Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
=======
<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
//

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST)) {
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama_mobil = $_POST['nama_mobil'];

    // b. Ambil data brand mobil
    $brand_mobil = $_POST['brand_mobil'];

    // c. Ambil data warna mobil
    $warna_mobil = $_POST['warna_mobil'];

    // d. Ambil data tipe mobil
    $tipe_mobil = $_POST['tipe_mobil'];

    // e. Ambil data harga mobil
    $harga_mobil = $_POST['harga_mobil'];

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $tambah_data = mysqli_query($koneksi, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
                                    VALUES('$nama_mobil', '$brand_mobil', '$warna_mobil', '$tipe_mobil', '$harga_mobil')");

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if($tambah_data) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        //echo "<meta http-equiv='refresh' content='1 url=connect.php'>";
    } 

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya
    else {
        echo "<script>alert('Error: ')</script>";
        //echo "<meta http-equiv='refresh' content='1 url=connect.php'>";
    } 
}
// (7) Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
>>>>>>> c17d2ac42a06833c1d496a3598d5502a4774ee12
?>