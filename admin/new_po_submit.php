<?php
    include("../connection.php");

    $po_name = $_POST['po_name'];
    echo $po_name;
    $sql = "INSERT INTO po_list (name)
VALUES ('$po_name')";
if (mysql_query($sql)) {
    echo "New record created successfully";
    header("Location:new_po.php");
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

mysql_close($conn);
    ?>