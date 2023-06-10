<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: black;
            font-family: sans-serif;
        }

        .div {
            background-color: red;
            width: 400px;
            background-color: gray;
            color: white;
            margin: 0 auto;
            padding: 10px;
            border-radius: 5px;
        }

        .div a {
            text-decoration: none;
            color: white;
            padding: 2px;
            background-color: red;
            border-radius: 2px;
            margin-left: 4px;
        }

        nav {
            background-color: white;
            width: 400px;
            margin: 0 auto;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            text-align: center;
        }

        nav>a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php require "views/components/navBar.php"; ?>

    <div class="div">