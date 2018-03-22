<?php
include('session.php');
include('connection.php');
?>

<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="Styles/header_main.css">
</head>
<body>
    <div class="wrapper col0">
        <div id="topline">
            <p>Welcome, <?php echo $_SESSION['name'];?>!</p>
            <ul>
                <li><a href="#">CHANGE PASSWORD</a></li>
                <li class="last"><a href="logout.php">LOGOUT</a></li>
            </ul>
            <br class="clear" />
        </div>
    </div>
    <div id="container">

    </div>
</body>
</html>
