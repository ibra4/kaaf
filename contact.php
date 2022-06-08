<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>

<main class="py-5">
    <div class="container position-relative cart-wrapper mt-0">
        <div class="cart-white-section bg-white rounded p-5 py-3">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <h1 class="font-size-md mb-4">Contact us</h1>
                    <div class="row">
                        <div class="col-md-8">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="full_name">Full name</label>
                                    <input type="text" id="full_name" name="full_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone number</label>
                                    <div class="form-row">
                                        <div class="col-4">
                                            <select name="phone_number_prefix" id="phone_number_prefix" class="form-control">
                                                <option value="+962">+962</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" id="phone_number" name="phone_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                </div>
            </div>
        </div>
    </div>

</main>

<?php require_once "./hmtl-components/en/footer.php" ?>
<?php require_once "./hmtl-components/en/login.php" ?>
<?php require_once "./hmtl-components/en/scripts.php" ?>