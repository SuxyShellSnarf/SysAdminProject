<!DOCTYPE html>
<html lang="en" xmlns:http="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Sys Admin Project</title>
</head>
<body>

<?php require "db.php" ?>

<div class="jumbotron text-center" style="background-image: url('http://cs.montclair.edu/images/csimage8.jpg');">
    <h1 style="color:#ffd500">Team Name Project</h1>
    <p>RIP</p>
</div>

<div class="container text-center">
    <div class="row text-center">
        <div class="col-3">
        </div>
        <div class="col-6">
            <h3>Lump</h3>
            <p class="text-left" style="text-indent: 40px">What if I just start typing here? Will anything happen? Who knows! Life is but a fever dream.</p>
            <p><<?php
                $sql = "select * from website";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $text = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $text;
                ?></p>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>
</body>
</html>