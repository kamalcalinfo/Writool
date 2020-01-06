<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "writool";
$qid=intval($_GET['id']);
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
    die("Connection failed due to ".mysqli_error($con));
}
$sql="select * from questions where q_id=$qid";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_assoc($res))
    {
        echo $row['answer'];
    }
}
else{
    echo "No results";
}
?>