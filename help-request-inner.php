<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>

<main class="py-5" id="wizard-page">
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
                                                <label>Text 1</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Text 2</label>
                                                <input type="text" class="form-control" placeholder="Text field inout">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Select Single</label>
                                                <select name="" class="form-control select2" id="">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Select Miltiple</label>
                                                <select name="multiple[]" class="form-control select2" id="" multiple>
                                                    <option value="1" selected>One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="">Dropzone</label>
                                                <div id="id_dropzone" class="dropzone"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleFormControlFile1">Simple file input</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group col-md-9">
                                                <label for="">Textarea</label>
                                                <textarea name="haha" class="form-control" id="" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-12 white-radios">
                                                <label for="">Checkboxes horizental</label>
                                                <div class="inline-radios-wrapper">
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="pupose_of_donation" id="pupose_of_donation3" value="option3">
                                                        <label class="form-check-label" for="pupose_of_donation3">
                                                            Kafara
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="pupose_of_donation" id="pupose_of_donation1" value="option1" checked="">
                                                        <label class="form-check-label" for="pupose_of_donation1">
                                                            Sadaqa
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="pupose_of_donation" id="pupose_of_donation4" value="option4">
                                                        <label class="form-check-label" for="pupose_of_donation4">
                                                            Kafara (Fasting)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="pupose_of_donation" id="pupose_of_donation5" value="option5">
                                                        <label class="form-check-label" for="pupose_of_donation5">
                                                            Qurban
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-12 white-radios">
                                                <label for="">Radios horizental</label>
                                                <div class="inline-radios-wrapper">

                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="hhrpupose_of_donation" id="hhrpupose_of_donation3" value="option3">
                                                        <label class="form-check-label" for="hhrpupose_of_donation3">
                                                            Kafara
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="hhrpupose_of_donation" id="hhrpupose_of_donation1" value="option1" checked="">
                                                        <label class="form-check-label" for="hhrpupose_of_donation1">
                                                            Sadaqa
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="hhrpupose_of_donation" id="hhrpupose_of_donation4" value="option4">
                                                        <label class="form-check-label" for="hhrpupose_of_donation4">
                                                            Kafara (Fasting)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="hhrpupose_of_donation" id="hhrpupose_of_donation5" value="option5">
                                                        <label class="form-check-label" for="hhrpupose_of_donation5">
                                                            Qurban
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 white-radios">
                                                <label for="">Checkboxes vertical</label>
                                                <div class="">
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="vpupose_of_donation" id="vpupose_of_donation3" value="option3">
                                                        <label class="form-check-label" for="vpupose_of_donation3">
                                                            Kafara
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="vpupose_of_donation" id="vpupose_of_donation1" value="option1" checked="">
                                                        <label class="form-check-label" for="vpupose_of_donation1">
                                                            Sadaqa
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="vpupose_of_donation" id="vpupose_of_donation4" value="option4">
                                                        <label class="form-check-label" for="vpupose_of_donation4">
                                                            Kafara (Fasting)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="checkbox" name="pupose_of_donation" id="vpupose_of_donation5" value="option5">
                                                        <label class="form-check-label" for="vpupose_of_donation5">
                                                            Qurban
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 white-radios">
                                                <label for="">Radios Vertical</label>
                                                <div class="">

                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="rpupose_of_donation" id="rpupose_of_donation3" value="option3">
                                                        <label class="form-check-label" for="rpupose_of_donation3">
                                                            Kafara
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="rpupose_of_donation" id="rpupose_of_donation1" value="option1" checked="">
                                                        <label class="form-check-label" for="rpupose_of_donation1">
                                                            Sadaqa
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="rpupose_of_donation" id="rpupose_of_donation4" value="option4">
                                                        <label class="form-check-label" for="rpupose_of_donation4">
                                                            Kafara (Fasting)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input custom" type="radio" name="rpupose_of_donation" id="rpupose_of_donation5" value="option5">
                                                        <label class="form-check-label" for="rpupose_of_donation5">
                                                            Qurban
                                                        </label>
                                                    </div>
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