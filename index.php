<?php
    require 'functions.php';

    $data = show("SELECT * FROM notes ORDER BY id DESC");
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

    <section class="list-notes">

        <div class="btn-add">
            <a href="tambah.php">Tambah</a>
        </div>

        <?php foreach ($data as $key) : ?>
            <div class="card">
                <div class="card-header">
                    <h3><?= $key["title"]; ?></h3>
                    <div class="card-action">
                        <a href="edit.php?id=<?= $key["id"]; ?>" class="btn-edit">
                            Edit
                        </a>
                        <a href="hapus.php?id=<?= $key["id"]; ?>" class="btn-delete" onclick="return confirm('Anda Dihapus?')">
                            Hapus
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p><?= $key["note"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>

    </section>

</body>
</html>