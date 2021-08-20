<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>