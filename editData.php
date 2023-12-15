<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ztyle.css">
    <title>Document</title>
</head>

<body>
    <?php 

    include("connection.php");

    if(!isset($_GET['id'])) {
        header('location:viewTask.php');
    }

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM task WHERE id = $id");

    while($user_data = mysqli_fetch_array($result))
    {
        $judul = $user_data['judul'];
        $kegiatan = $user_data['kegiatan'];
        $category = $user_data['category'];
    }

?>
    <div class="form">
        <form action="prosesEdit.php" method="post" class="formBox">
            <div class="formItem">
                <label for="judul">Judul</label><br>
                <input type="text" name="judul" id="judul" value="<?php echo $judul; ?>" placeholder="Masukkan Judul"
                    required>
            </div>
            <div class="formItem">
                <label for="kegiatan">Kegiatan</label><br>
                <input type="text" name="kegiatan" id="kegiatan" value="<?php echo $kegiatan; ?>"
                    placeholder="Masukkan Kegiatannya" required>
            </div>
            <div class="formItem">
                <label for="category">Category</label><br>
                <!-- <input type="" name="category" id="category" value="<?php echo $category; ?>"
                    placeholder="Masukkan Catergorynya" required> -->
                <select name="category" id="category" class="option">
                    <option value="None" class="optionMenu">None</option>
                    <option value="Disekolah" class="optionMenu">Disekolah</option>
                    <option value="Dirumah" class="optionMenu">Dirumah</option>
                    <option value="Dikantor" class="optionMenu">Dikantor</option>
                    <option value="Diluar" class="optionMenu">Diluar</option>
                </select>
            </div>
            <div class="formAddButtonS">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <input type="submit" name="simpan" value="KIRIM" style="border: none; border-radius: 5px;">
            </div>

        </form>
    </div>
</body>

</html>