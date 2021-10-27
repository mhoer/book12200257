<html>
<head>
<title>Tampil Data Transaksi</title>
</head>
<marquee width="100%" bgcolor="#DA70D6">
        <h3><font color="black">Selamat Transaksi Berhasil</marquee></font></h3>
<body>
<pre>
Nama Pembeli    : <?= $nama; ?><br>
Nomor Handphone : <?= $no_hp; ?><br>
Merk Sepatu     : <?= $merk; ?><br>
Ukuran          : <?= $ukuran; ?><br>
<hr>
harga           : <?= $harga; ?><br>
</pre>
<a href="<?= base_url('transaksisepatu'); ?>">Kembali</a>