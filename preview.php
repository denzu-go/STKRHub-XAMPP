<?php
session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user 
            WHERE user_id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

$product_id = isset($_SESSION['product_id']) ? $_SESSION['product_id'] : '';
$price = isset($_SESSION['price']) ? $_SESSION['price'] : 0;
$size = isset($_SESSION['size']) ? $_SESSION['size'] : 0;
$qty = isset($_SESSION['qty']) ? $_SESSION['qty'] : 0;

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM products
        WHERE product_id = '$product_id'";

$result = $mysqli->query($sql);

if (!$result){
    die("invalid query");
}

$product = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out Preview</title>
</head>
<body>
    <h1> CHECK OUT PREVIEW</h1>


    <h1>purchase description</h1>
    <table>
        <tr>
            
            <th><?= htmlspecialchars($product["product_name"]) ?></th>
            <th>quantity: <?= htmlspecialchars($qty) ?></th>
            <th>Price: <?= htmlspecialchars($price) ?></th>
            <th>Description: <?= htmlspecialchars($product["product_description"]) ?></th>
        </tr>

    </table>


    <h1>Details</h1>
    
    <form id="addressForm" method="post" action="order.php">



    <select name="address">

    <?php
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM adresses WHERE user_id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);

    if (!$result) {
        die("invalid query");
    }

    while ($address = $result->fetch_assoc()) {
    echo "<option value=' ". $address["address_id"] . "'>
        <table>
            <tr>
            <td>" . $address["recipient"] . "</td>
            <td>" . $address["contact"] . "</td>
           
            
            <td>" . $address["house_number"] . "</td>
            <td>" . $address["street"] . "</td>
            
          
            <td>" . $address["city"] . "</td>
            <td>" . $address["province"] . "</td>
            <td>" . $address["postal_code"] . "</td>
           <td>
            
            </td>
            </tr>
        </table>
       
        </option>
    ";
    }
    ?>
    
</select>

        <button type="submit" name="action" value="checkout">Check Out</button>
        <button type="submit" name="action" value="delete">Delete</button>


</form>

<a href='add_address.php'>add</a>

<script>
  // Get the <select> element and the form
  const selectElement = document.querySelector('select[name="address"]');
  const addressForm = document.getElementById('addressForm');

  // Add event listener for the form submission event
  addressForm.addEventListener('submit', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the selected option
    const selectedOption = selectElement.options[selectElement.selectedIndex];

    // Get the ID value from the selected option
    const selectedId = selectedOption.value;

    // Create a hidden input for the address ID
    const hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'id';
    hiddenInput.value = selectedId;

    // Append the hidden input to the form
    addressForm.appendChild(hiddenInput);

    // Check the value of the action button
    const actionButton = document.activeElement;
    if (actionButton.name === 'action' && actionButton.value === 'delete') {
      // Create a temporary form to submit the address deletion
      const deleteForm = document.createElement('form');
      deleteForm.method = 'post';
      deleteForm.action = 'delete_address.php';

      // Create a hidden input for the address ID in the delete form
      const deleteHiddenInput = document.createElement('input');
      deleteHiddenInput.type = 'hidden';
      deleteHiddenInput.name = 'id';
      deleteHiddenInput.value = selectedId;

      // Append the hidden input to the delete form
      deleteForm.appendChild(deleteHiddenInput);

      // Submit the delete form
      document.body.appendChild(deleteForm);
      deleteForm.submit();
    } else {
      // Submit the address form for checkout
      addressForm.submit();
    }
  });
</script>

</body>
</html>
