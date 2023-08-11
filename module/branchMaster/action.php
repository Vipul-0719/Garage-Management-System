
<?php

require('../connect.php');

// $id = $_GET['id'];
// if (isset($id)) {
//     // $sql = "SELECT * FROM state_master WHERE country_id LIKE '%".$_GET['id']."%'";
//     $sql = "SELECT * FROM state_master WHERE country_id = $id";
//     $result = mysqli_query($conn, $sql);

//     $json = [];
//     while ($row = $result->fetch_assoc()) {
//         $json[$row['id']] = $row['state_name'];
//     }
//     echo json_encode($json);
// }


if (!empty($_POST["id"])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM state_master WHERE country_id = $id";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        echo '<option value="">--Select State--</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['state_name'] . '</option>';
        }
    }
} elseif (!empty($_POST['sid'])) {
    $id = $_POST['sid'];
    $query1 = "SELECT * FROM city_master WHERE state_id = $id";
    $result1 = mysqli_query($conn, $query1);
    if ($result1->num_rows > 0) {
        echo '<option value="">--Select City--</option>';
        while ($row = mysqli_fetch_assoc($result1)) {
            echo '<option value="' . $row['id'] . '">' . $row['city_name'] . '</option>';
        }
    }
}

?>