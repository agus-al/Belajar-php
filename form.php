<form method="POST">
    <input type="text" name="nama" placeholder="Masukkan nama">
    <button type="submit">Kirim</button>
</form>

<?php
if(isset($_POST['nama'])){
    echo "Halo " . $_POST['nama'];
}
?>
