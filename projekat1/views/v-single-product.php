<main>
    <div class="container">
        <h1 class="card-title mb-4"><?php echo htmlspecialchars($product['title']); ?></h1>
        <div class="row">
            <div class="col-7">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="..." width="350px">
            </div>
            <div class="col-5">
                <a class="btn btn-secondary" href="./single-product-page.php?stranica=<?php echo getNextProduct($productId); ?>"> Next product</a>
                <a class="btn btn-dark" href="./products-page.php"> All products</a>
                <a class="btn btn-secondary" href="./single-product-page.php?stranica=<?php echo getPreviousProduct($productId); ?>"> Previous product</a>
                <p class="mt-5"> Price: $<?php echo $product['price']; ?></p>
                <p class="mt-5"> Brand: <?php echo $product['brand']; ?></p>
                <p class="mt-5"> Category: <?php echo $product['category']; ?></p>
                <p class="mt-5"> Available: <?php if ($product['available']) echo "Yes";
                                            else echo "Not available"; ?></p>
                <input class="col-2" type="number" min='1' max='100' name="quantity" id="quantity" placeholder="Quantity">
                <a class="btn btn-dark" href="./checkout-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>"> ADD TO CART </a>
            </div>
            <div class="col-12 mt-5">
                <p><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
        </div>
        <div class="row mt-5">
            <h3 class="row mb-5"> RELATED PRODUCTS</h3>
            <?php
            foreach ($relatedProducts as $singleRelated) { ?>
                <article class="single-product col-4 row mb-5">
                    <div class='col-6'>
                        <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="100" height="100">
                    </div>
                    <div class='col-6 card-body'>
                        <span><?php echo htmlspecialchars($singleRelated['brand']); ?></span>
                        <p><?php echo htmlspecialchars($singleRelated['title']); ?></p>
                        <a class="btn btn-secondary" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</main>