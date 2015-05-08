<?php
    include("../connection.php");

    $dev_name = $_POST['developer_name'];
    $sql = "INSERT INTO po_list (name)
VALUES ('$po_name')";
if (mysql_query($sql)) {
    echo "New record created successfully";
    header("Location:new_dev.php");
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

mysql_close($conn);
    ?>