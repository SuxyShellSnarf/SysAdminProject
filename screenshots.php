<?php
/**
 * Created by PhpStorm.
 * User: SuxyShellSnarf
 * Date: 2019-04-11
 * Time: 14:13
 */

require "db.php";
$sql = "select * from website where tag = 'sc'";
$stmt = $db->prepare($sql);
$stmt->execute();
$text = $stmt->fetch(PDO::FETCH_ASSOC);
?>

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

<div class="jumbotron text-center" style="background-image: url('http://cs.montclair.edu/images/csimage8.jpg');">
    <h1 style="color:#ffd500">Team Name Project</h1>
    <h3 style="color:#ffd500"><?php echo $text["title"]; ?></h3>
</div>

<div class="container text-center">
    <div class="row text-center">
        <div class="col-2">
        </div>
        <div class="col-8">
            <?php echo $text["text"]; ?>
            <img src = "Screenshots/adfs-1.PNG" class="img-thumbnail">
            <img src = "Screenshots/adfs-2.PNG" class="img-thumbnail">
            <img src = "Screenshots/adfs-3.PNG" class="img-thumbnail">
            <img src = "Screenshots/adfs-4.PNG" class="img-thumbnail">
            <img src = "Screenshots/ldap-1.PNG" class="img-thumbnail">
            <img src = "Screenshots/ldap-2.PNG" class="img-thumbnail">
            <img src = "Screenshots/ldap-3.PNG" class="img-thumbnail">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Directory
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <?php
                    $sql2 = "select file, title from website where tag != 'sc'";
                    $stmt2 = $db->prepare($sql2);
                    $stmt2->execute();
                    $entries = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($entries as $t): ?>
                        <li><a href="<?php echo $t["file"]; ?>"><?php echo $t["title"]; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <div class="col-2">
        </div>
    </div>
</div>
</body>
</html>