<!DOCTYPE html>
<html>
<head>
<title>Рассылки подписчикам магазина DOGS ACTIVE</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список еженедельных рассылок подписчикам магазина DOGS ACTIVE</h2>
<?php
$conn = new mysqli("mysql", "root", "shgreen-secret", "myurl");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM myurl";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено ссылок: $rowsCount</p>";
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
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>