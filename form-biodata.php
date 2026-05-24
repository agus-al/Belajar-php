<!DOCTYPE html>
<html>
<head>
<style>
body{font-family:Arial;text-align:center}
</style>
</head>
<body>

<h2>Form Biodata</h2>

<form method="POST">
<input name="nama" placeholder="Nama">
<input name="umur" placeholder="Umur">
<button type="submit">Kirim</button>
</form>

<?php
if(isset($_POST['nama']) && isset($_POST['umur'])){
$nama = htmlspecialchars($_POST['nama']);
$umur = htmlspecialchars($_POST['umur']);
echo "<p>Halo ".$nama." umur ".$umur."</p>";
}
?>

</body>
</html>
