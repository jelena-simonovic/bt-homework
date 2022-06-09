<!DOCTYPE html>
<html lang="en">
<?php

session_start();

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}

if (isset($_GET['name'])) {
    $closed = $_GET['name'];
} else {
    $closed = false;
}
// izvini sto je ovako sturo, ne stizem drugacije
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php if ($_SESSION['page_count'] == 1 && $closed != true) { ?>
        <div class='modal' tabindex='-1'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <p> We have to ask you: do you accept our cookies?</p>
                </div>
                <div class='modal-footer'>
                    <form action="hw23br2.php" method="GET">
                        <button type='submit' class='btn btn-secondary' name="close" data-bs-dismiss='modal'>ACCEPT</button>
                    </form>
                </div>
            </div>
        </div>
    <?php } else {
        echo "Cookies accepted";
    } ?>
</body>

</html>