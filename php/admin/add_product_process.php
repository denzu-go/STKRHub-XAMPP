<?php 

if(isset($_POST['submit']) && isset($_FILES['image'])) {

    $mysqli = require __DIR__ . "/database.php";

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $category = $_POST['category'];
    $product_description = $_POST['product_description'];

    echo "<pre>";
    print_r($_FILES['image']);
    echo"</pre>";


    $img_name = $_FILES['image']['name'];	
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if($error === 0) {
        if($img_size > 1250000){
            $em = "file is too large";
            header("Location:product_management.php?");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg" , "png");

                if(in_array($img_ex_lc,$allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/' .$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);

                    $sql = " INSERT INTO products(product_image,category,product_name,product_price,product_description)
                    VALUES (?,?,?,?,?)";

        $stmt = $mysqli->stmt_init();

        if (! $stmt->prepare($sql)){
            die("SQL error:" . $mysqli-> error);
        }

        $stmt-> bind_param("sssis",
                                $new_img_name,
                                $category,
                                $product_name,
                                $product_price,
                                $product_description);

            if ($stmt->execute()){

            header("Location: product_management.php");
            exit;
        } 

                } else {
                    $em = "Wrong file type";
                    header("Location:product_management.php?");
                }
        }
    } else {
        $em = "unknown error occurred";
        header("Location:product_management.php?");
    }









} else {
header("Location: product_management.php");
}
?>