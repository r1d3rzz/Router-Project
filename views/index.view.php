<?php require "views/partials/header.php"; ?>
<h1>Usernames</h1>
<?php if (count($users)) : ?>
    <?php foreach ($users as $user) : ?>
        <li style="margin-bottom: 10px;">
            <?= $user->names; ?>
            <a href="delete?id=<?= $user->id; ?>">Delete</a>
        </li>
    <?php endforeach; ?>
<?php else : ?>
    <li>Empty Users</li>
<?php endif; ?>

<h1>Submit Usernames</h1>
<form action="/names" method="POST">
    <input type="text" name="name" placeholder="Enter Your Name here">
    <input type="submit" value="submit">
</form>
<?php require "views/partials/footer.php"; ?>