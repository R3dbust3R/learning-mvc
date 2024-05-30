<?php require_once('layout/header.php'); ?>

<div class="container">
    <h1>Edit User</h1>
    <form action="index.php?action=update-user-data" method="post">
        <input value="<?= $user_data->id; ?>" type="hidden" class="hidden" placeholder="id" name="id">
        <input value="<?= $user_data->name; ?>" type="text" class="form-control mb-1" placeholder="name" name="name">
        <input value="<?= $user_data->username; ?>" type="text" class="form-control mb-1" placeholder="username" name="username">
        <input value="<?= $user_data->email; ?>" type="text" class="form-control mb-1" placeholder="email" name="email">
        <input value="<?= $user_data->phone; ?>" type="text" class="form-control mb-1" placeholder="phone" name="phone">
        <input type="submit" class="btn btn-primary" value="Edit User Data" name="submit">
    </form>
</div>
    
<?php require_once('layout/footer.php'); ?>