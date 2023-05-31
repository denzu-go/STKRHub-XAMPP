<?php
$category = "";
$product_name = "";
$product_price = "";
$product_description = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category= $_POST["category"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_description = $_POST["product_description"];

    do {
        if (empty($category) || empty($product_name) || empty($product_price) || empty($product_description)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Add new client
        // Establish database connection first
        $connection = new mysqli("localhost:3307", "root", "", "stkrhub");
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = "INSERT INTO products (category, product_name, product_price, product_description) VALUES ('$category','$product_name','$product_price','$product_description')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query " . $connection->error;
        }

        $connection->close();

        $category = "";
        $product_name = "";
        $product_price = "";
        $product_description = "";

        $successMessage = "Procuct added correctly";

        header("Location: /STKRHUB-XAMPP/php/admin/product_management.php");
        exit;

    } while (false);
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
        <h2>New PRODUCT</h2>

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
        <form method="post">
            <div class="row mb-3">
            <label  class="col-sm-3 col-form-label" for = "category"> Category </label>
                <div class="col-sm-6">
            <input type = "text" class="form-control" name = "category"> <br>
                </div>
            </div>

            <div class="row mb-3">
            <label  class="col-sm-3 col-form-label" for = "product_name"> Product Name </label>
                <div class="col-sm-6">
            <input type = "text" class="form-control" name = "product_name"> <br>
                </div>
            </div>

            <div class="row mb-3">
            <label  class="col-sm-3 col-form-label" for = "product_price"> Price </label>
                <div class="col-sm-6">
            <input type = "text" class="form-control" name = "product_price"> <br>
                </div>
            </div>


            <div class="row mb-3">
            <label  class="col-sm-3 col-form-label" for = "product_description"> Description</label>
                <div class="col-sm-6">
            <input type = "text" class="form-control" name = "product_description"> <br>
                </div>
            </div>


            <?php
            if (!empty($successMessage)) {
                echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' ria-label='close'></button>
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
                    <a class="btn btn-outline-primary" href="/STKRHUB-XAMPP/php/admin.php">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
