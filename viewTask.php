<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ztyle.css">
    <title>Document</title>
</head>

<body>
    <div class="view">
        <div class="tabelView">
            <table class="tabel">
                <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>KEGIATAN</th>
                    <th>CATEGORY</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                <?php

                include "connection.php";
                $query_mysql = mysqli_query($mysqli, "SELECT * FROM task")or die(mysqli_error(die));
                $nomor = 1;
                while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
                <tr style="text-align: center ;">
                    <td><?php echo $nomor++ ?></td>
                    <td style="text-align: left;"><?php echo $data['judul'] ?></td>
                    <td style="text-align: left;"><?php echo $data['kegiatan'] ?></td>
                    <td style="text-align: left;"><?php echo $data['category'] ?></td>
                    <td><a href="editData.php?id=<?php echo $data['id']; ?>"><button type="button" class="mainButton"
                                style="border: none;">EDIT</button></a>
                    </td>
                    <td><a href="deleteData.php?id=<?php echo $data['id']; ?>"><button type="button" class="mainButton"
                                style="border: none;">DELETE</button></a>
                    </td>
                </tr>

                <?php } ?>
            </table>
        </div>
    </div>
    <div class="newDataView">
        <a href="form.php" class="newForm"><button type="button" class="buttonNewData">Add New</button></a>
    </div>
</body>

</html>