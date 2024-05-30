<?php

function connect() {
    return new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
}

function get_users() {
    return connect()->query('SELECT * FROM users ORDER BY id DESC LIMIT 5')->fetchAll(PDO::FETCH_OBJ);
}

function insert_new_user($name, $username, $email, $phone) {
    $stmt = connect()
    ->prepare('INSERT INTO users (name, username, email, phone) VALUES (?, ?, ?, ?)');
    $stmt->execute([
        $name,
        $username,
        $email,
        $phone
    ]);
    return true;
}

function destroy_user($id) {
    $stmt = connect()->prepare('DELETE FROM users WHERE id = ?');
    if ($stmt->execute([$id])) { return true; }
}

function get_user_data($id) {
    $stmt = connect()->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->execute([ $id ]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}
function update_user_data_model($name, $username, $email, $phone, $id) {
    $stmt = connect()->prepare('UPDATE users SET name=?, username=?, email=?, phone=? WHERE id=?');
    $stmt->execute([
        $name,
        $username,
        $email,
        $phone,
        $id
    ]);
    return true;
}