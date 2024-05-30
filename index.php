<?php

require_once('controller/users_controller.php'); 

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'store-user-data') {_add_user_(); } 
    else if ($action == 'update-user-data') {update_user_data();} 
    else if ($action == 'user-add') {add_user();} 
    else if ($action == 'edit') {edit_user();} 
    else if ($action == 'delete') {delete_user();} 
    else if ($action == 'list') {list_users();} 
    else {header('Location: index.php?action=list');}

} else {header('Location: index.php?action=list');}