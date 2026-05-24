<form method="POST">
<input name="a" placeholder="Angka 1">
<input name="b" placeholder="Angka 2">

<select name="op">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>

<button type="submit">Hitung</button>
</form>

<?php
if(isset($_POST['a'], $_POST['b'], $_POST['op'])){

$a = $_POST['a'];
$b = $_POST['b'];
$op = $_POST['op'];

if($op=="+") $hasil=$a+$b;
elseif($op=="-") $hasil=$a-$b;
elseif($op=="*") $hasil=$a*$b;
elseif($op=="/") $hasil=$b!=0?$a/$b:"Tidak bisa bagi nol";

echo "<h3>Hasil: $hasil</h3>";
}
?>

