<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
</head>
<body bgcolor="#75ACC0">

    <?php 
        include('php/menu_dropdown.php'); 
        include('php/con.php');
    ?>

    <div class="music_table">
        <table>
            <tbody>
        <?php
            if (!$con) {
                die(mysql_error());
            }
            mysqli_select_db($con, "music_material");
            $results = mysqli_query($con, "SELECT * FROM content LIMIT 20");
            while($row = mysqli_fetch_array( $results)) {
        ?>
            <tr>
                <td><?php echo $row['titulo']?></td>
                <td><a href="<?php echo $row['link']?>"><button id="btn_submit">Listen!</button></a></td>
            </tr>

        <?php
        }
        ?>
            </tbody>
        </table>
    </div>
</body>
</html>