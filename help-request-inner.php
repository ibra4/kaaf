<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>

<main class="py-5" id="wizard-page">
    <div class="container mb-4">
        <h1 class="font-size-xl mb-4">Help Request 1</h1>
        <div class="row">
            <div class="col-md-8">
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco
                    laboris nisi ut.</p>
            </div>
        </div>
    </div>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="text-center">
                        <h2>Help Request</h2>
                        <p>Fill all form field to go to next step</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar" class="font-weight-bold text-center">
                                    <li class="active" id="account">Step 1</li>
                                    <li id="personal">Step 2</li>
                                    <li id="personal">Step 3</li>
                                    <li id="confirm">Finish</li>
                                </ul>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Step 1</h2>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Label</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Select</label>
                                                <select name="" class="form-control" id="">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlFile1">Example file input</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Checkboxes</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Default checkbox
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                                    <label class="form-check-label" for="defaultCheck2">
                                                        Disabled checkbox
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Default radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Second default radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="exampleRadios3">
                                                        Disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons-container">
                                        <input type="button" name="next" class="next btn btn-purple rounded" value="Next Step" />
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Step 2</h2>
                                    </div>
                                    <div class="buttons-container">
                                        <input type="button" name="previous" class="previous mr-2 btn btn-secondary rounded" value="Previous" />
                                        <input type="button" name="next" class="next btn btn-purple rounded" value="Next Step" />
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Step 3</h2>
                                    </div>
                                    <div class="buttons-container">
                                        <input type="button" name="previous" class="previous mr-2 btn btn-secondary rounded" value="Previous" />
                                        <input type="button" name="next" class="next btn btn-purple rounded" value="Next Step" />
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3 text-center">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Complete the Form!</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once "./hmtl-components/en/footer.php" ?>
<?php require_once "./hmtl-components/en/login.php" ?>
<?php require_once "./hmtl-components/en/scripts.php" ?>