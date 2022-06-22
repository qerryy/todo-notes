<?php

require 'functions.php';

    $id = $_GET["id"];

    if (delete($id) > 0) {
        echo "
            <script>
                alert('Catatan Berhasil Dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Catatan Gagal Dihapus');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>