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
       
       
$fname1=$_POST['fname'];
$sname1=$_POST['sname'];
$uname1=$_POST['uname'];

$pass1=$_POST['pass'];
$cpass1=$_POST['cpass'];
$email1=$_POST['email'];

$gend1=$_POST['gend'];
$chk1=$_POST['chk'];
$sle1=$_POST['sle'];
$add1=$_POST['add'];
       
$sql = "INSERT INTO `register`(`fname`, `sname`, `uname`, `pass`, `cpass`, `email`, `gender`, `qua`, `select`, `add`) VALUES ('$fname1', '$sname1', '$uname1', '$pass1', '$cpass1', '$email1', '$gend1','$chk1', '$sle1', '$add1' )";

$result =mysql_query($sql);
echo $sql;
exit;
?>
       