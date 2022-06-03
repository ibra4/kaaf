<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>

<main class="py-5">
    <div class="container">
        <?php require_once "./hmtl-components/en/breadcrumb.php" ?>
        <section class="pb-0">
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="bg-white br-10 h-100">
                            <div class="p-3">
                                <div class="icon-input border rounded">
                                    <input type="text" placeholder="Search" id="">
                                    <input type="image" src="/assets/icon/search.svg">
                                </div>
                            </div>
                            <hr>
                            <div class="p-3">
                                <label class="font-weight-bold" for="">Filters</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="filter" checked id="filter1" value="1">
                                    <label class="form-check-label" for="filter1">
                                        Urgent relief
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="filter" id="filter2" value="2">
                                    <label class="form-check-label" for="filter2">
                                        Zakat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="filter" checked id="filter3" value="3">
                                    <label class="form-check-label" for="filter3">
                                        Contributing project
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="filter" checked id="filter4" value="4">
                                    <label class="form-check-label" for="filter4">
                                        Incomplete projects
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="p-3">
                                <label class="font-weight-bold" for="">Sort projects</label>
                                <select name="sort" class="form-control" id="">
                                    <option value="1">Newest to oldest</option>
                                </select>
                            </div>
                            <hr>
                            <div class="color-grey px-3">20 projects found</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="latest-project-card latest-project-card-column">
                                    <div class="status-label-wrapper">
                                        <div>
                                            <label class="status-label urgant">Urgant</label>
                                        </div>
                                        <div>
                                            <label class="status-label new">New</label>
                                        </div>
                                    </div>
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
                            <div class="col-md-4 mb-3">
                                <div class="latest-project-card latest-project-card-column">
                                    <div class="status-label-wrapper">
                                        <div>
                                            <label class="status-label urgant">Urgant</label>
                                        </div>
                                        <div>
                                            <label class="status-label new">New</label>
                                        </div>
                                    </div>
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
                            <div class="col-md-4 mb-3">
                                <div class="latest-project-card latest-project-card-column">
                                    <div class="status-label-wrapper">
                                        <div>
                                            <label class="status-label urgant">Urgant</label>
                                        </div>
                                        <div>
                                            <label class="status-label new">New</label>
                                        </div>
                                    </div>
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
                            <div class="col-md-4 mb-3">
                                <div class="latest-project-card latest-project-card-column">
                                    <div class="status-label-wrapper">
                                        <div>
                                            <label class="status-label urgant">Urgant</label>
                                        </div>
                                        <div>
                                            <label class="status-label new">New</label>
                                        </div>
                                    </div>
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
                            <div class="col-md-4 mb-3">
                                <div class="latest-project-card latest-project-card-column">
                                    <div class="status-label-wrapper">
                                        <div>
                                            <label class="status-label urgant">Urgant</label>
                                        </div>
                                        <div>
                                            <label class="status-label new">New</label>
                                        </div>
                                    </div>
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
                            <div class="col-md-4 mb-3">
                                <div class="latest-project-card latest-project-card-column">
                                    <div class="status-label-wrapper">
                                        <div>
                                            <label class="status-label completed">Completed</label>
                                        </div>
                                    </div>
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
                                    </div>
                                    <hr>
                                    <div>
                                        <hr class="m-0">
                                        <button class="btn btn-white btn-lg w-100">
                                            <i class="fa-regular fa-file"></i>
                                            <label for="" class="pl-2">Download report</label>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pager d-flex flex-wrap justify-content-start">
                <a href="#" class="pager-item">
                    <i class="fa-solid fa-left-long"></i>
                </a>
                <a href="#" class="pager-item">1</a>
                <a href="#" class="pager-item">2</a>
                <a href="#" class="pager-item">3</a>
                <a href="#" class="pager-item">4</a>
                <a href="#" class="pager-item">...</a>
                <a href="#" class="pager-item">18</a>
                <a href="#" class="pager-item">
                    <i class="fa-solid fa-right-long"></i>
                </a>
            </div>
        </section>
    </div>
</main>

<?php require_once "./hmtl-components/en/footer.php" ?>
<?php require_once "./hmtl-components/en/scripts.php" ?>