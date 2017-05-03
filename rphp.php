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


$name=$_POST['name'];
$email=$_POST['email'];
$paswd=$_POST['paswd'];
$sql = "INSERT INTO naveen(name, Email, password) VALUES ('$name', '$email', '$paswd')";
$result =mysql_query($sql);
echo $sql;
exit;
?>