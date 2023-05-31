<?php
$order_quantity = "";
$order_status = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["order_id"])) {
        header("location: /STKRHUB-XAMPP/php/admin/order_management.php");
        exit;
    }

    $user = $_GET["order_id"];

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "stkrhub";

    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "SELECT * FROM orders WHERE order_id=$user";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: /STKRHUB-XAMPP/php/admin/order_management.php");
        exit;
    }

    $order_quantity = $row['order_quantity'];
    $order_status = $row['order_status'];
} else {
    $user = $_POST["id"]; // Assuming the user ID is passed via POST request

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "stkrhub";

    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "SELECT * FROM orders WHERE order_id=$user";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    $order_quantity = $row['order_quantity'];
    $order_status = $_POST['order_status']; // Use the updated value from the form

    if (empty($user) || empty($order_status)) {
        $errorMessage = "All fields are required";
    } else {
        $sql = "UPDATE orders SET order_status = '$order_status' WHERE order_id = $user";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid Query" . $connection->error;
        } else {
            $successMessage = "Status Updated";
            header("location: /STKRHUB-XAMPP/php/admin/order_management.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STKRHUB</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <h2>Change Order Status</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
        }
        ?>

        <form method="post" action="">
            <input type="hidden" value="<?php echo $user ?>" name="id">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="order_status">Order Status</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="order_status" value="<?php echo $order_status ?>"><br>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="order_quantity">Order Quantity</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="order_quantity" value="<?php echo $order_quantity ?>"><br>
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                            </div>
                        </div>
                    </div>
                    ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="/STKRHUB-XAMPP/php/admin/order_management.php">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
