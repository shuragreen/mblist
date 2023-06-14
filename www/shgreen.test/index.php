<!DOCTYPE html>
<html>
<head>
<title>Newsletters to DOGS ACTIVE subscribers</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Weekly mailing list for DOGS ACTIVE store subscribers</h2>
<?php
$conn = new mysqli("mysql", "root", "shgreen-secret", "myurl");
if($conn->connect_error){
    die("Error: " . $conn->connect_error);
}
$sql = "SELECT * FROM myurl";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // number of received rows
    echo "<p>Received rows: $rowsCount</p>";
    foreach($result as $row){
        echo "<table><tr><th>Id</th><th>Ссылка</th></tr>";
        echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["url"] . "</td>";
        echo "</tr>";
        readfile($row["url"]);
    }
    echo "</table>";
    $result->free();
} else{
    echo "Error: " . $conn->error;
}
$conn->close();
?>
</body>
</html>
