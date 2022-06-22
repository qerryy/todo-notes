<?php
    require 'functions.php';

    $id = $_GET["id"];

    $sql = show("SELECT * FROM notes WHERE id = $id")[0];

    if (isset($_POST["submit"])) {
        if (edit($_POST) > 0) {
            echo "
                <script>
                    alert('Catatan Berhasil Diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Catatan Gagal Diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Notes</title>
</head>
<body>
    
    <section class="form-input">
        <nav>
            <a href="index.php">< Back</a>
        </nav>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $sql["id"] ?>">
            <input name="title" type="text" placeholder="Judul" value="<?= $sql["title"] ?>" required>
            <textarea name="note" cols="30" rows="10" placeholder="Description" required><?= $sql["note"] ?></textarea>
            <button name="submit" type="submit">Update</button>
        </form>
    </section>

</body>
</html>