<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
   <?php
$db_database = 'raj';
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server)
    die("Unable to connect to MYSQL: " . mysql_error());
mysql_select_db($db_database)
        or die("Unable to connect to database: " . mysql_error());
    
    $sql = "SELECT * FROM `register`";

$result =mysql_query($sql);
    
    $darray=array();
    while($row=mysql_fetch_assoc($result)){
        $darray[]=$row;
    }
print_r($darray);
    exit;
    ?>
    
</body>
</html>
