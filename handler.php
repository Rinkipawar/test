<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'123456');
define('DB_NAME', 'test');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
public function insert($name,$email,$adrss,$msg)
{
$ret=mysqli_query($this->dbh,"insert into customer_detail(name,email,addrss,msg)
values('$name','$email','$adrss','$msg')");
return $ret;
}
}
?>