<!-- data insert -->
<?php

$servername="localhost";
$sid="root";
$sname="";
$dbname="s_info";

$conn=new mysqli($servername,$sid,$sname,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "INSERT INTO `student`(`Sid`, `Sname`, `Semester`, `Branch`) VALUES ('','ronak','4','computer')";

if($conn->query($sql)==True)
{
    echo "new record inserted successfully";
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}

?>

<!-- data display -->
<?php

$servername="localhost";
$sid="root";
$sname="";
$dbname="s_info";

$conn=new mysqli($servername,$sid,$sname,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Sid`, `Sname`, `Semester`, `Branch` FROM `student` WHERE 1  " ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Sid</th><th>Sname</th><th>Semester</th><th>Branch</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Sid"] . "</td><td>" . $row['Sname'] . "</td><td>" . $row["Semester"] . "</td><td>" . $row["Branch"] . "</td></tr>";
    }
    echo "<table>";
} 
else {
    echo "0 Result";
}
?>
