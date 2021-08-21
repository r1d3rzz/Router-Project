<?php require "views/partials/header.php"; ?>
    <h1>Submit Usernames</h1>
    <form action="/names" method="POST">
        <input type="text" name="name" id="">
        <input type="submit" value="submit">
    </form>
<?php require "views/partials/footer.php"; ?>