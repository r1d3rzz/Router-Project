<?php require "views/partials/header.php"; ?>
    <h1>My Job</h1>
    <?php foreach($tasks as $task): ?>
        <?php
            if($task->complete)
            {
                echo "<br/><strike>$task->description</strike>";
            }    
            else
            {
                echo $task->description;
            }
        ?>
    <?php endforeach; ?>
<?php require "views/partials/footer.php"; ?>