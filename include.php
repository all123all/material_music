<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INCLUDE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/main.js"></script>
</head>
<body bgcolor="#75ACC0">
    <?php include('php/menu_dropdown.php'); ?>

    <form action="php/add_music.php" method="get" id="form1">
        <input type="text" name="link" id="title" placeholder="here comes the link"><br>
        <input type="text" name="title" placeholder="and here you choose a title"><br>
    </form>

    <button type="submit" form="form1" value="Submit" id="btn_submit">Save</button>
</body>
</html>