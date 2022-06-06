<?php
require_once __DIR__ . "/models/products-model.php";
require_once __DIR__ . "/models/user-model.php";

$productId = null;
$quantity = null;
$submited = false;
$systemErrors = [];

if(!empty($_POST['product_id'])) {
    $productId = $_POST['product_id'];
}

if(!empty($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
}

if(is_null($productId) || is_null($quantity)) {
    die("Pokusaj hakovanja!");
}


// VALIDACIJA NARUCIVANJA
// VALIDACIJA NARUCIVANJA
// VALIDACIJA NARUCIVANJA

if($_POST['buy'] == "yes") {
    // NAME
    $name = (string) $_POST['name'];
    $name = trim($name);
    if(empty($name)) {
        $systemErrors['name'] = "Field name is required!";
    }
    // LAST NAME
    $last_name = (string) $_POST['last_name'];
    $last_name = trim($last_name);
    if(empty($last_name)) {
        $systemErrors['last_name'] = "Field last name is required!";
    }
    // EMAIL
    $email = (string) $_POST['email'];
    $email = trim($email);
    if(empty($email)) {
        $systemErrors['email'] = "Field email is required!";
    }
    if(empty($systemErrors['email']) && !str_contains($email, "@")) {
        $systemErrors['email'] = "Mail must include @!";
    }
    // CITY
    $city = (string) $_POST['city'];
    $city = trim($city);
    if(empty($city)) {
        $systemErrors['city'] = "Field city is required!";
    }
    // PHONE
    $phone = (string) $_POST['phone'];
    $phone = trim($phone);
    if(empty($phone)) {
        $systemErrors['phone'] = "Field phone is required!";
    }
    if(empty($systemErrors['phone']) && !isValidPhone($phone)) {
        $systemErrors['phone'] = "Phone number is not valid!";
    }
    // STREET
    $street = (string) $_POST['street'];
    $street = trim($street);
    // ZIP
    $zip = (string) $_POST['zip'];
    $zip = trim($zip);
    if(empty($zip)) {
        $systemErrors['zip'] = "Field zip is required!";
    }
    // MESSAGE
    $message = (string) $_POST['message'];
    $message = trim($message);
    // RIGHTS
    $rights = (string) $_POST['rights'];
    if(empty($rights)) {
        $systemErrors['rights'] = "You must check your rights!";
    }

    if(empty($systemErrors)) {
        $submited = true;
    }
}


$product = getOneProductById($productId);

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-checkout.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";