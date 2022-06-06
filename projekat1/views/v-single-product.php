<main>
    <div class="container">
        <div class="row">
            <div class="col-7 mt-5">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="..." width="350px">
            </div>
            <div class="col-5 mt-3">
                <h1 class="mt-2"><?php echo htmlspecialchars($product['title']); ?></h1>
                <p class="mt-5"> Price: $<?php echo $product['price']; ?></p>
                <p class="mt-5"> Available: <?php if ($product['available']) echo "Yes";
                                            else echo "Not available"; ?></p>
                <p class="mt-3"><?php echo htmlspecialchars($product['description']); ?></p>
                <form action="checkout-page.php" method="post">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="quantity" min='1' max='100'>
                        <div class="input-group-prepend">
                            <span class="input-group-text">QUANTITY:</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Checkout</button>
                </form>
            </div>
        </div>
        <div class="mt-5">
            <a class="btn btn-secondary" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($previousProduct); ?>"> Previous product</a>
            <a class="btn btn-dark" href="./products-page.php"> All products</a>
            <a class="btn btn-secondary" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($nextProduct); ?>"> Next product</a>
        </div>
        <div class="row mt-5">
            <h3 class="mb-2 text-center"> RELATED PRODUCTS</h3>
            <?php
            foreach ($relatedProducts as $singleRelated) { ?>
                <article class="col-3 mb-5 text-center p-4">
                    <img class="card-img-top p-5" src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="product image">
                    <div class='card-body'>
                        <span><?php echo htmlspecialchars($singleRelated['brand']); ?></span>
                        <p><?php echo htmlspecialchars($singleRelated['title']); ?></p>
                        <a id="btn-grad" class="btn btn-secondary" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</main>