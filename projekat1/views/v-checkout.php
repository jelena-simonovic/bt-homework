<main class="container">
    <div class="row mb-5">
        <form class="col-6 mt-5 mb-5 p-5 bg-light text-dark" action="./models/m-checkout.php" method="POST">
            <label class="form-label" for="name"> Name: </label>
            <input type="text" name="name" id="name">
            <br>
            <label class="form-label" for="last_name"> Last name: </label>
            <input type="text" name="last_name" id="last_name"> <br>
            <label class="form-label" for="email"> Email: </label>
            <input type="text" name="email" id="email"> <br>
            <label class="form-label" for="phone"> Phone: </label>
            <input type="text" name="phone" id="phone"> <br>
            <label class="form-label" for="city"> City: </label>
            <input type="text" name="city" id="city"> <br>
            <label class="form-label" for="street_num"> Street and number: </label>
            <input type="text" name="street_num" id="street_num"> <br>
            <label class="form-label" for="zip"> ZIP: </label>
            <input type="text" name="zip" id="zip"> <br>
            <label class="form-label" for="comment"> Comment: </label> <br>
            <input type="text" name="comment" id="comment">
            <br>
            <input class="form-check-input" type="checkbox" name="agree" id="agree">
            <label class="form-label" for="agree"> Do you agree? </label> <br>
            <br>
            <button type="submit" class="btn btn-dark"> BUY </button>
        </form>
        <div class="col-5 mt-5">
            <img src="<?php echo $product['img']; ?>" width="250px" />
            <div class="col-5">
                <span><?php echo $product['title']; ?></span>
                <p>$<?php echo $product['price']; ?></p>
            </div>
        </div>
    </div>
</main>