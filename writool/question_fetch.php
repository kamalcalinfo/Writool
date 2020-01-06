<html>
<head>
</head>
<body>
    <div>
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
        echo "<h6> ".$row['q_id']." ".$row['question']."</h6>";
        echo "<h6> Ans </h6>";
        echo "<p> <span><input type='checkbox' id='a1' > ".$row['A']."</p>";
        echo"<p> <span><input type='checkbox' id='a2'  > ".$row['B']."</p>";
        echo "<p> <span><input type='checkbox' id='a1' > ".$row['C']."</p>";
        echo "<p> <span><input type='checkbox' id='a1' > ".$row['D']."</p>";
    }
}
else{
    echo "No results";
}
?>
</div>
</body>
</html>