<?php if (!$submited) { ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6 mb-5">
                    <form class="p-4" action="./checkout-page.php" method="post" style="border: solid black 2px; border-radius: 2%;">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                            <?php if (!empty($systemErrors['name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Enter last name" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
                            <?php if ($systemErrors['last_name']) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['last_name']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                            <?php if ($systemErrors['email']) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="<?php echo htmlspecialchars($city); ?>">
                                    <?php if ($systemErrors['city']) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['city']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                                    <?php if ($systemErrors['phone']) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['phone']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="street">Street & number</label>
                                    <input type="text" class="form-control" id="street" placeholder="Enter street & number" name="street" value="<?php echo htmlspecialchars($street); ?>">
                                    <?php if ($systemErrors['street']) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['street']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder="Enter zip" name="zip" value="<?php echo htmlspecialchars($zip); ?>">
                                    <?php if ($systemErrors['zip']) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['zip']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" placeholder="Comment" name="message"><?php echo htmlspecialchars($message); ?></textarea>
                            <?php if ($systemErrors['message']) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['message']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-check mb-5">
                            <input type="checkbox" name="rights" value="success" class="form-check-input" id="rights" <?php if($rights == 'success') { echo htmlspecialchars("Checked"); } ?>>
                            <label class="form-check-label" for="rights">Do you know your rights?</label>
                            <?php if ($systemErrors['rights']) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['rights']); ?></small>
                            <?php } ?>
                        </div>
                        <button type="submit" class="btn btn-success mt-5 mb-5" name="buy" value="yes">Buy</button>
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($quantity); ?>">
                    </form>
                </div>
                <div class="col-6">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo htmlspecialchars($product['img']); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                                <p class="card-text">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-warning">Price:</h5>
                                        <h5 class="text-danger"><?php echo htmlspecialchars($product['price']); ?> $</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-warning">Quantity:</h5>
                                        <h5 class="text-danger"><?php echo htmlspecialchars($quantity); ?></h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-warning">Price with quantity:</h5>
                                        <h5 class="text-danger"><?php echo htmlspecialchars($product['price'] * $quantity); ?> $</h5>
                                    </div>
                                    <hr class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <h2 class="text-warning">TOTAL:</h2>
                                        <h2 class="text-danger"><?php echo htmlspecialchars($product['price'] * $quantity); ?> $</h2>
                                    </div>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } else { ?>
    <main>
        <div class="container text-center">
            <h1 class="text-success">Cestitam <?php echo $name; ?>! Uspesno ste izvrsili kupovinu proizvoda: <?php echo $product['title']; ?></h1>
        </div>
    </main>
<?php } ?>