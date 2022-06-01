<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>
<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5">
                <div class="login-bg" style="background-image: url('/assets/images/login-bg.jpeg');">
                </div>
            </div>
            <div class="col-md-7">
                <div class="container-fluid">
                    <h4 class="text-center font-weight-bold my-5">Sign In</h4>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="color-dark-purple font-weight-bold">Forgot Password</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-purple rounded w-100">
                            <span>Sign in</span>
                            <i class="fa-solid fa-right-long ml-2"></i>
                        </button>
                    </div>
                    <div class="form-group">
                        <p>Don’t have an account yet? <a href="#" class="color-dark-purple font-weight-bold">Create one now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "./hmtl-components/en/footer.php" ?>
<?php require_once "./hmtl-components/en/scripts.php" ?>