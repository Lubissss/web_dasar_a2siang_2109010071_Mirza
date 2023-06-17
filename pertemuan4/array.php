<?php
$mobil = array("Xenia","Alphard","BMW");
//Var_dump($mobil);
//Menampilkan array berdasarkan nilai array nya
//echo $mobil[0];

//Menghitung jumlah array
//echo count($mobil);
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
</tr>
<tr>
    <td>1</td>
    <td><?php echo $Mobil[0] ?></td>
</tr>
<tr>
    <td>2</td>
    <td><?php echo $Mobil[1] ?></td>
</tr>
<tr>
    <td>3</td>
    <td><?php echo $Mobil[2] ?></td>
</tr>
</Table>

<p>saya suka mobil <?= $mobil[0] ?> dan saya suka mobil <?= $mobil[1] ?>,tetapi saya tidak suka mobil <?= $mobil[2] ?></p>