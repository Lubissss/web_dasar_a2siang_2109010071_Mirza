<?php
$mobil = array("xenia","alphard","bmw");
$jumlah_mobil = count($mobil);
?>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>no</th>
        <th>nama mobil</th>
</tr>
<?php
for ($i=0; $i < $jumlah_mobil; $i++) { ?>
    <tr>
        <td><?= $i+1 ?></td>
        <td><?= $mobil[$i] ?></td>
    </tr>
<?php } ?>
</table>