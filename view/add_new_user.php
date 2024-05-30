<?php require_once('layout/header.php'); ?>

<div class="container">
    <h1>Add a new user</h1>
    <form action="index.php?action=store-user-data" method="post">
        <input type="text" class="form-control mb-1" placeholder="name" name="name">
        <input type="text" class="form-control mb-1" placeholder="username" name="username">
        <input type="text" class="form-control mb-1" placeholder="email" name="email">
        <input type="text" class="form-control mb-1" placeholder="phone" name="phone">
        <input type="submit" class="btn btn-primary" value="Add a new user" name="submit">
    </form>
</div>
    
<?php require_once('layout/footer.php'); ?>