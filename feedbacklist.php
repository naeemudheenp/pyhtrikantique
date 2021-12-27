<?php
//connecting to database
$db="pythrikag";
$user_name="naeem";
$password="naeem";
$server="localhost";
$db_info = mysql_connect($server,$user_name,$password,$db);
$db_test=mysql_select_db($db,$db_info);
if(!$db_test){
	die("Could not connect".mysql_error());
}

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM security ";
$sqlsync=mysql_query($sql,$db_info);
$sqlresult=mysql_fetch_array($sqlsync,MYSQL_ASSOC);

$realusername=$sqlresult['username'];
$realpassword=$sqlresult['password'];

if($realusername==$username && $realpassword==$password){}
    else{
			
			die("Incorrect password");


		}



//retreaving list
$sql="SELECT * FROM feedback";
$sqlsync=mysql_query($sql,$db_info);
echo"<link rel='stylesheet' href='margin.css'>";
echo"<table border='+1'> <center><tr><th>NAME</th><th>PHONE NUMBER</th><TH>MESSAGE</TH></tr>";
while($sqlresult_set=mysql_fetch_array($sqlsync,MYSQL_ASSOC)) {
    echo"<tr><center>";

    $name=$sqlresult_set['name'];
    $phone=$sqlresult_set['phone'];
    $email=$sqlresult_set['message'];
        echo "<td>$name</td>";
        echo "<td>$phone</td>";
        echo "<td>$email</td>";
    echo "</div>";
    echo"</tr>";

}

?>
