<DOCTYPE html>
    <html>
        <head>
        <style>
         body{font-family:Arial;text-align:center;color:blue}
         .hasil{text-align:left}
        </style>
        </head>
        <body>
            <h2> FORM BIDATA </h2>
            <form method="POST">
                <input name ="nama" placeholder ="Nama">
                <input name ="nip" placeholder ="NIP">
                <input name="pangkatgol" placeholder ="Pangkat/Gol">
                <input name="jabatan" placeholder ="Jabatan">
                <input name="instansi" placeholder ="Instansi">
                <button type="Submit">Kirim</button>
            </form>

<?php
if(isset($_POST['nama']) &&
isset($_POST['nip']) &&
isset($_POST['pangkatgol']) &&
isset($_POST['jabatan']) &&
isset($_POST['instansi']))
{
    $nama=htmlspecialchars($_POST['nama']);
    $nip=htmlspecialchars($_POST['nip']);
    $pangkatgol=htmlspecialchars($_POST['pangkatgol']);
    $jabatan=htmlspecialchars($_POST['jabatan']);
    $instansi=htmlspecialchars($_POST['instansi']);
    echo "<p class='hasil'> Nama :" .$nama. 
    "<br> NIP :" .$nip. 
    "<br> Pangkat/Gol :" .$pangkatgol. 
    "<br> Jabatan :" .$jabatan. 
    "<br> Instansi :" .$instansi. 
    "</p>";
}

?>
</body>
</html>