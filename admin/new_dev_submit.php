<?php
    include("../connection.php");

    $dev_name = $_POST['developer_name'];
    $github_profile = $_POST['github_profile'];
    $sql = "INSERT INTO developers (name, github_profile)
VALUES ('$dev_name', '$github_profile')";
if (mysql_query($sql)) {
    echo "New record created successfully";
    header("Location:new_dev.php");
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($conn);
}

mysql_close($conn);
    ?>