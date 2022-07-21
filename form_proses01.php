<?php
$user_nim         = $_POST['nim'];
$user_name        = $_POST['name'];
$user_clas        = $_POST['clas'];
$user_address     = $_POST['address'];
$user_gender      = $_POST['gender'];

echo "<center><font color=blue>DATA ANDA BERHASIL DIREKAM</center> <br>";

$fp = fopen("tugasAkhir.txt", "a+");

fputs($fp, "$user_nim|$user_name|$user_clas|$user_address|$user_gender\n");
fclose($fp);

echo "<a href=taResponsi.php><center> back to first page click here </center></a><br>";
