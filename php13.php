<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "swastik";
$conns = mysqli_connect($host, $username, $password, $dbname);
if (!$conns) {
    die("connection failed! " . mysqli_connect_error());
}
$sql = "select * from students";
$result = mysqli_query($conns, $sql);
echo "<h1>Table of the students:</h1>";
echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Date_of_birth</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<th>" . $row["id"] . "</th>";
    echo "<th>" . $row["name"] . "</th>";
    echo "<th>" . $row["email"] . "</th>";
    echo "<th>" . $row["address"] . "</th>";
    echo "<th>" . $row["date_of_birth"] . "</th>";
    echo "</tr>";
}
echo "</table>";
