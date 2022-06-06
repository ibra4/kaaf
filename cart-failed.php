<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>

<div class="banner-550px">
    <img src="/assets/images/bahrain.png" alt="">
</div>
<main class="container position-relative cart-wrapper">
    <div class="cart-white-section bg-white rounded p-5 py-3">
        <h2 class="d-flex align-items-center color-danger font-size-md mb-5"><img src="/assets/icon/warning.svg" alt=""><span class="font-weight-bold pl-2">Transaction unsuccessful</span></h2>
        <div class="row">
            <div class="col-md-8 mb-3">
                <p>An error has occurred. Please try again, or contact us to resolve the problem.</p>
                <button class="btn btn-light-purple rounded my-5">
                    <i class="fa-solid fa-left-long"></i>
                    <span class="pl-2">Back to Cart</span>
                </button>
                <div class="mt-5 mb-4">
                    <h3 class="font-size-sm2">Payment information:</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="d-flex bg-light-purple br-10 p-3">
                                <div>
                                    <div class="mb-3">Visa Credit Card</div>
                                    <div class="mb-3">7/23 - **** **** **** 5678</div>
                                </div>
                                <img class="visa-icon" src="/assets/images/visa.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-purple rounded">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="pl-2">Send receipt to my email</span>
                </button>
            </div>
            <div class="col-md-3">
                <div class="bg-light-purple br-10 p-3">
                    <h3 class="font-size-sm2">Donation summary</h3>
                    <div class="color-dark-grey mb-2">3 shares</div>
                    <div class="color-dark-grey mb-3">Total donated</div>
                    <hr class="my-3">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="cart-success-image-wrapper">
                            <img src="/assets/images/cart-item-image.png" alt="">
                        </div>
                        <div>
                            <div class="mx-2">Semi-artesian well 60-70m</div>
                            <div class="d-flex justify-content-between">
                                <div class="color-grey">3 shares</div>
                                <div class="color-grey2">BD 33</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="cart-success-image-wrapper">
                            <img src="/assets/images/cart-item-image.png" alt="">
                        </div>
                        <div>
                            <div class="mx-2">Semi-artesian well 60-70m</div>
                            <div class="d-flex justify-content-between">
                                <div class="color-grey">3 shares</div>
                                <div class="color-grey2">BD 33</div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-3">
                    <div class="d-flex justify-content-between font-weight-bold">
                        <div class="color-dark-purple">Total</div>
                        <div>
                            <span class="font-size-xs">BHD</span>
                            <span class="pl-2">65.9</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <button class="btn btn-white rounded ml-auto">
            <i class="fa-solid fa-print"></i>
            <span class="pl-2">Print</span>
        </button>
    </div>
</main>

<?php require_once "./hmtl-components/en/footer.php" ?>
<?php require_once "./hmtl-components/en/login.php" ?>
<?php require_once "./hmtl-components/en/scripts.php" ?>