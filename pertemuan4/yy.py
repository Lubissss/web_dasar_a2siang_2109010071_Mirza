    <?php
//contoh 1
$umur = array("anhar" => "17", "budi" => "21", "lampard" => "37");

echo "umur si anhar sekarang adalah " . $umur["anhar"] . "<br>";
?>

<table border="1" style="border-collapse: collapse">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>umur</th>
    </tr>
    <?php
    $no = 1;
    foreach($umur as $u => $u_value) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $u ?></td>
        <td><?= $u_value ?></td>
    </tr>
    <?php endforeach; ?>
</table>
