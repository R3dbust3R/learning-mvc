<?php require_once('layout/header.php'); ?>

<div class="container">
    <h1 class="">All users</h1>
    <table class="table table-striped table-light">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id; ?></td>
                    <td class="text-uppercase"><?= $user->name; ?></td>
                    <td class="text-lowercase"><?= $user->username; ?></td>
                    <td class="text-lowercase"><?= $user->email; ?></td>
                    <td><?= $user->phone; ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $user->id; ?>" class="rounded-pill btn btn-success btn-sm">Edit</a>
                        <a onclick="return confirm('You are about to delete: <?= $user->name; ?>?')" href="index.php?action=delete&id=<?= $user->id; ?>" class="rounded-pill btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="index.php?action=user-add" class="btn btn-primary">Add a new user</a>
</div>
    
<?php require_once('layout/footer.php'); ?>