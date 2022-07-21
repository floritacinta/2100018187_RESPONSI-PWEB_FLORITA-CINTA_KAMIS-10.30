<?php

$fp = fopen("tugasAkhir.txt", "r");

echo "<table border=1 align=center>";
echo "<tr>";
echo "<td>  nim</td>";
echo "<td>  name&nbsp&nbsp&nbsp</td>";
echo "<td>  clas&nbsp</td>";
echo "<td>  address&nbsp&nbsp&nbsp</td>";
echo "<td>  gender&nbsp&nbsp&nbsp</td>";
echo "</tr>";

while ($isi = fgets($fp, 2000)) {
    $pisah = explode("|", $isi);
    echo "<tr>";
    echo "<td>  $pisah[0]  </td>";
    echo "<td>  $pisah[1]  </td>";
    echo "<td>  $pisah[2]  </td>";
    echo "<td>  $pisah[3]  </td>";
    echo "<td>  $pisah[4]  </td>";
    echo "</tr>";
}

echo "</table></center>";
echo "<center><br><a href=taResponsi.php> KLIK TULISAN INI UNTUK KEMBALI KE TAMPILAN AWAL</a><br></center></br>";
