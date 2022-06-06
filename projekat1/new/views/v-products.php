<main>
    <div class="container">
        <form class="row" action="./all-products-page.php" method="get">
            <div class="col-2">
                <select name="sort" id="" class="form-select" aria-label="Default select example">
                    <option <?php if($sort == "") { echo htmlspecialchars("Selected"); } ?> value="">None</option>
                    <option <?php if($sort == ORDER_BY_PRICE_ASC) { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_ASC); ?>">By price asc</option>
                    <option <?php if($sort == ORDER_BY_PRICE_DESC) { echo htmlspecialchars("Selected"); } ?> value="<?php echo htmlspecialchars(ORDER_BY_PRICE_DESC); ?>">By price desc</option>
                </select>
            </div>
            <div class="col-3"></div>
            <input class="col-5" type="text" name="term" value="<?php echo htmlspecialchars($term); ?>">
            <button type="submit" class="btn btn-warning col-2">Search</button>
            <hr class="mt-3">
        </form>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <article class="single-product col-4 row mb-5">
                    <div class='col-4'>
                        <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="" width="100" height="100">
                    </div>
                    <div class='col-8 text-center'>
                        <h6><?php echo htmlspecialchars($product['title']); ?></h6>
                        <p>PRICE: <?php echo htmlspecialchars($product['price']);?> $</p>
                        <a class="btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show Product</a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</main>