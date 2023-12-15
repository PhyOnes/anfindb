<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ztyle.css">
    <title>Document</title>
</head>

<body>
    <div class="form">
        <form action="form.php" method="post" class="formBox">
            <div class="formItem">
                <label for="judul">Judul</label><br>
                <input type="text" name="judul" id="judul" placeholder="Masukkan Judul" required>
            </div>
            <div class=" formItem">
                <label for="kegiatan">Kegiatan</label><br>
                <input type="text" name="kegiatan" id="kegiatan" placeholder="Masukkan Kegiatannya" required>
            </div>
            <div class=" formItem">
                <label for="category">Category</label><br>
                <!-- <input type="text" name="category" id="category" placeholder="Masukkan Categorynya" required> -->
                <select name="category" id="category" class="option">
                    <option value="None" class="optionMenu">None</option>
                    <option value="Disekolah" class="optionMenu">Disekolah</option>
                    <option value="Dirumah" class="optionMenu">Dirumah</option>
                    <option value="Dikantor" class="optionMenu">Dikantor</option>
                    <option value="Diluar" class="optionMenu">Diluar</option>
                </select>
            </div>
            <div class="formAddButton">
                <input type="submit" name="submit" value="ADD NEW DATA">

            </div>
            <?php
    
    if(isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $kegiatan = $_POST['kegiatan'];
        $category = $_POST['category'];

        include_once("connection.php");
        
        $result = mysqli_query($mysqli, "INSERT INTO task(judul,kegiatan,category) VALUES('$judul','$kegiatan','$category')");
        header("location:viewTask.php");        
    };
    ?>
        </form>
    </div>
</body>

</html>