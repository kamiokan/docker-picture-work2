<?php

$mysqli = new mysqli('app', 'root', 'secret', 'sandbox');

$result = $mysqli->query('select * from items');

while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['name']}</p>";
}
$result->close();

$mysqli->close();

