<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $files = fopen("sinhvien.txt", "r");
    $i = 0;
    ?>

    <table>
        <tr>
            <td>STT</td>
            <td>MSSV</td>
            <td>Tên</td>
            <td>Môn</td>
            <td>Điểm</td>
        </tr>
        <?php while (!feof($files)) {
            $a = fgets($files);
            $b = explode(" ", $a);
        ?>
        <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $b[0]; ?></td>
            <td><?php echo $b[1] . " " . $b[2] . " " . $b[3]; ?></td>
            <td><?php echo $b[4]; ?></td>
            <td><?php echo $b[5]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>