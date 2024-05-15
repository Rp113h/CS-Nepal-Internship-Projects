<?php
if(isset($_POST['checknum'])) {
    $checknumb = trim($_POST['checknum']);

    $server = 'localhost';
    $user = 'root';
    $pass = '_your_db_password';

    $conn1 = mysqli_connect($server, $user, $pass, 'operators');

    $nameQuery = "SELECT * FROM phnum WHERE phnumber='$checknumb'";
    $nameResult = mysqli_query($conn1, $nameQuery);

    if ($nameResult && mysqli_num_rows($nameResult) > 0) {
        $row = mysqli_fetch_assoc($nameResult);
        $customername = $row['name'];

        $ftd = substr($checknumb, 0, 3);

        $idQuery = "SELECT * FROM details WHERE operator_code='$ftd'";
        $operatorResult = mysqli_query($conn1, $idQuery);

        if ($operatorResult && mysqli_num_rows($operatorResult) > 0) {
            $row_id = mysqli_fetch_assoc($operatorResult);
            $operator_name = $row_id['operator_name'];
        } else {
            $operator_name = "Unknown Operator";
        }
    } else {
        $customername = "Unknown Customer";
        $operator_name = "Unknown Operator";
    }

    $response[] = array('name' => $customername, 'operator_name' => $operator_name);
    echo json_encode($response);
} else {
    echo "No phone number provided.";
}
?>
