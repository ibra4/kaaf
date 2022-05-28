<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>

<div class="banner" style="background-image: url(/assets/images/man-child.png);">
    <div class="banner-inner container color-white">
        <h1 class="banner-title mb-3">Help Request</h1>
        <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore.</p>
    </div>
</div>

<main class="py-5">
    <div class="container">
        <h1 class="font-size-xl mb-4">Choose Help Request Type</h1>
        <div class="row">
            <div class="col-md-6">
                <p class="text-secondary font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
        <section id="projects" class="color-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="/help-request-inner.php" class="project-teaser" style="background-image: url('/assets/images/project1.png');">
                            <div class="teaser-text">
                                <h2>Type 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut.</p>
                            </div>
                            <div class="overlay">
                                <i class="fa-solid fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="/help-request-inner.php" class="project-teaser" style="background-image: url('/assets/images/project2.png');">
                            <div class="teaser-text">
                                <h2>Type 2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut.</p>
                            </div>
                            <div class="overlay">
                                <i class="fa-solid fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="/help-request-inner.php" class="project-teaser" style="background-image: url('/assets/images/project3.png');">
                            <div class="teaser-text">
                                <h2>Type 3</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut.</p>
                            </div>
                            <div class="overlay">
                                <i class="fa-solid fa-link"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="latest-projects" class="section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-3 d-flex flex-column justify-content-center">
                        <div>
                            <h3 class="large-black-title">Latest Projects</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore.</p>
                            <div class="row">
                                <div class="d-flex">
                                    <button class="btn color-dark-purple">
                                        View all
                                        <i class="fa-solid fa-right-long ml-2"></i>
                                    </button>
                                    <div class="latest-projects-slick-buttons d-flex justify-content-between"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 mb-3">
                        <div class="latest-projects-slick">
                            <div class="latest-project-card mx-3">
                                <label class="status-label new">New</label>
                                <img src="/assets/images/waterchild.png" alt="">
                                <div class="body pb-0">
                                    <h4 class="mb-0">Semi-artesian well 60-70m</h4>
                                    <a href="#" class="btn color-grey px-0">
                                        <span class="mr-2">Details</span>
                                        <img src="/assets/icon/viewallgrey.svg" alt="">
                                    </a>
                                    <p>An electric pump and a tank with a capacity of 3000 cubic liters…</p>
                                    <div class="progress-bar">
                                        <div class="progress-bar-value"></div>
                                    </div>
                                    <div class="row latest-project-numbers flex-nowrap">
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Project value</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Paid</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Remaining</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                        <span>BHDs</span>
                                        <button class="btn decrease-5">
                                            <img src="/assets/icon/minus.svg" alt="">
                                        </button>
                                        <input name="num" type="text" value="5">
                                        <button class="btn increase-5">
                                            <img src="/assets/icon/plus.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between footer container mb-3">
                                    <button class="btn btn-purple">Donate Now</button>
                                    <button class="btn btn-white color-dark-purple d-flex align-items-center">
                                        Add
                                        <i class="fa fa-shopping-cart ml-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-card mx-3">
                                <label class="status-label urgant">Urgant</label>
                                <img src="/assets/images/waterchild.png" alt="">
                                <div class="body pb-0">
                                    <h4 class="mb-0">Semi-artesian well 60-70m</h4>
                                    <a href="#" class="btn color-grey px-0">
                                        <span class="mr-2">Details</span>
                                        <img src="/assets/icon/viewallgrey.svg" alt="">
                                    </a>
                                    <p>An electric pump and a tank with a capacity of 3000 cubic liters…</p>
                                    <div class="progress-bar">
                                        <div class="progress-bar-value"></div>
                                    </div>
                                    <div class="row latest-project-numbers flex-nowrap">
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Project value</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Paid</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Remaining</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                        <span>BHD</span>
                                        <button class="btn decrease-5">
                                            <img src="/assets/icon/minus.svg" alt="">
                                        </button>
                                        <input type="text" value="5">
                                        <button class="btn increase-5">
                                            <img src="/assets/icon/plus.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between footer container mb-3">
                                    <button class="btn btn-purple">Donate Now</button>
                                    <button class="btn btn-white color-dark-purple d-flex align-items-center">
                                        Add
                                        <i class="fa fa-shopping-cart ml-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-card mx-3">
                                <label class="status-label permissible">Zakat permissible</label>
                                <img src="/assets/images/waterchild.png" alt="">
                                <div class="body pb-0">
                                    <h4 class="mb-0">Semi-artesian well 60-70m</h4>
                                    <a href="#" class="btn color-grey px-0">
                                        <span class="mr-2">Details</span>
                                        <img src="/assets/icon/viewallgrey.svg" alt="">
                                    </a>
                                    <p>An electric pump and a tank with a capacity of 3000 cubic liters…</p>
                                    <div class="progress-bar">
                                        <div class="progress-bar-value"></div>
                                    </div>
                                    <div class="row latest-project-numbers flex-nowrap">
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Project value</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Paid</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Remaining</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                        <span>BHD</span>
                                        <button class="btn decrease-5">
                                            <img src="/assets/icon/minus.svg" alt="">
                                        </button>
                                        <input type="text" value="5">
                                        <button class="btn increase-5">
                                            <img src="/assets/icon/plus.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between footer container mb-3">
                                    <button class="btn btn-purple">Donate Now</button>
                                    <button class="btn btn-white color-dark-purple d-flex align-items-center">
                                        Add
                                        <i class="fa fa-shopping-cart ml-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-card mx-3">
                                <img src="/assets/images/waterchild.png" alt="">
                                <div class="body pb-0">
                                    <h4 class="mb-0">Semi-artesian well 60-70m</h4>
                                    <a href="#" class="btn color-grey px-0">
                                        <span class="mr-2">Details</span>
                                        <img src="/assets/icon/viewallgrey.svg" alt="">
                                    </a>
                                    <p>An electric pump and a tank with a capacity of 3000 cubic liters…</p>
                                    <div class="progress-bar">
                                        <div class="progress-bar-value"></div>
                                    </div>
                                    <div class="row latest-project-numbers flex-nowrap">
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Project value</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Paid</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="label text-secondary mb-1">Remaining</p>
                                            <p class="value"><span class="curruncy">BHD</span> <span>1,678</span></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                        <span>BHD</span>
                                        <button class="btn decrease-5">
                                            <img src="/assets/icon/minus.svg" alt="">
                                        </button>
                                        <input type="text" value="5">
                                        <button class="btn increase-5">
                                            <img src="/assets/icon/plus.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between footer container mb-3">
                                    <button class="btn btn-purple">Donate Now</button>
                                    <button class="btn btn-white color-dark-purple d-flex align-items-center">
                                        Add
                                        <i class="fa fa-shopping-cart ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php require_once "./hmtl-components/en/footer.php" ?>
<?php require_once "./hmtl-components/en/login.php" ?>
<?php require_once "./hmtl-components/en/scripts.php" ?>