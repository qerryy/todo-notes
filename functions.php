<?php

require "koneksi.php";

function show($query) {
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];
    
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert($data) {
    global $db;

    $title = htmlspecialchars($data['title']);
    $note = htmlspecialchars($data['note']);

    $query = "INSERT INTO notes (title, note) VALUES ('$title', '$note')";
    
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function edit($data) {
    global $db;

    $id = $data['id'];
    $title = htmlspecialchars($data['title']);
    $note = htmlspecialchars($data['note']);

    $query = "UPDATE notes SET title = '$title', note = '$note' WHERE id = $id";
    
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function delete($id) {
    global $db;

    mysqli_query($db, "DELETE FROM notes WHERE id = $id");
    return mysqli_affected_rows($db);
}

?>