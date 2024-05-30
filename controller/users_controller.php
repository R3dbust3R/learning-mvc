<?php


require_once('model/users_model.php');




function list_users() {
    $users = get_users();
    require_once('view/users_list.php');
}


function add_user() {
    require_once('view/add_new_user.php');
}


function _add_user_() {
    if (isset($_POST) && !empty($_POST)) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $user_result = insert_new_user($name, $username, $email, $phone);
        if ($user_result) {
            header('Location: index.php?action=list');
        }
        return false;
    }
}

function delete_user() {
    if (isset($_GET['id'])) {
        if (destroy_user($_GET['id'])) { header('Location: index.php?action=list&result=deleted'); }
    }
}


function edit_user() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user_data = get_user_data($id);
        require_once('view/edit-user.php');    
    } else {
        header('Location: index.php?action=list');
    }
}

function update_user_data() {
    if (isset($_POST) && !empty($_POST)) {
        if (update_user_data_model(
            $_POST['name'],
            $_POST['username'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['id']
        )) {
            header('Location: index.php?action=list&result=updated');
        }
    } else {
        header('Location: index.php?action=list');
    }
}