<?php
    include_once('../../connection/connection.php');

    $json = array();
    $sqlQuery = "SELECT * FROM tbl_events ORDER BY id";

    $result = mysqli_query($con, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($con);
    echo json_encode($eventArray);
?>