<?php
$servername="localhost";
$username="root";
$password="";
$dbname="swastik";
$conn=new mysqli($servername,$username,$password,$dbname);
if (!$conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
$sql="SELECT*from students";
$result=$con->query($sql);
?>
<?php
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo"<tr>
        <td>".$row["id"]."</td>
 <td>".$row["name"]."</td>
  <td>".$row["email"]."</td>
   <td>".$row["date_of_birth"]."</td>
    <td>".$row["status"]."</td>
    </tr>";
    }
} else 
 echo"<tr><td colspan='5' class='text-center'>No record found</td></tr>"
;
$conn->close();

?>