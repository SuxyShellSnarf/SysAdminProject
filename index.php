<?php
/**
 * Created by PhpStorm.
 * User: SuxyShellSnarf
 * Date: 2019-04-11
 * Time: 11:35
 */

require "db.php" ?>

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
            <p><?php
                $sql = "select * from website";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $text = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $text["text"];
                ?></p>
        </div>
        <div class="col-3">
        </div>
    </div>
</div>
</body>
</html>