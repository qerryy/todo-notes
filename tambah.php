<?php
    require 'functions.php';

    if (isset($_POST["submit"])) {
        if (insert($_POST) > 0) {
            echo "
                <script>
                    alert('Catatan Berhasil Ditambah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Catatan Gagal Ditambah');
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
            <input name="title" type="text" placeholder="Judul" required>
            <textarea name="note" cols="30" rows="10" placeholder="Description" required></textarea>
            <button name="submit" type="submit">Simpan</button>
        </form>
    </section>

</body>
</html>