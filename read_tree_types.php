<<?php 
require('nema.php');

$results = $sql_connection->query("SELECT ID, TYPE_NAME, NUMBER_OF_TREES FROM tree_types ORDER BY ID ASC");

foreach ($results as $key => $value) {
    $id = $value["ID"];
    $name = $value["TYPE_NAME"];
    $number = $value["NUMBER_OF_TREES"];

    echo "
    <tr>

    <td> $id </td>
    <td> $name </td>
    <td> $number </td>
    <td> 
    </tr>
    ";
}
 
