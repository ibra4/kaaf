<?php require_once "./hmtl-components/en/head.php" ?>
<?php require_once "./hmtl-components/en/navbar.php" ?>

<main class="py-5">
    <div class="container">
        <h1 class="font-size-md mb-4">Search results for</h1>
        <h1 class="font-size-xl color-dark-purple mb-5">Help Request</h1>

        <section class="pb-5">
            <ul class="nav nav-tabs b-radius-10 px-5 mb-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="help-request-wrapper bg-white b-radius-10 p-2 mb-2">
                        <div class="d-flex flex-wrap justify-content-start">
                            <a href="/build/help-request-inner.html" class="overlay-wrapper">
                                <div class="overlay"></div>
                                <img class="help-image" src="/assets/images/children.png" alt="">
                            </a>
                            <div class="col py-3">
                                <h3 class="font-size-sm color-dark-purple">Help Request Type 1</h3>
                                <h3 class="font-size-xs color-secondary">
                                    <img src="/assets/icon/flags/ps.svg" alt="">
                                    <span class="font-weight-normal pl-1">Palestine</span>
                                </h3>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <p class="color-secondary min-width-200 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin ante sed lorem varius molestie. Nam blandit, mi vitae finibus porttitor, leo ipsum faucibus magna, vel cursus metus ex pulvinar ex. Aenean elit ante, tristique at</p>
                                    </div>
                                </div>
                                <a href="/build/help-request-inner.html" class="btn color-grey font-size-xs px-0">
                                    <span class="mr-2">Details</span>
                                    <img src="/assets/icon/viewallgrey.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="help-request-wrapper bg-white b-radius-10 p-2 mb-2">
                        <div class="d-flex flex-wrap justify-content-start">
                            <a href="/build/help-request-inner.html" class="overlay-wrapper">
                                <div class="overlay"></div>
                                <img class="help-image" src="/assets/images/children.png" alt="">
                            </a>
                            <div class="col py-3">
                                <h3 class="font-size-sm color-dark-purple">Help Request Type 2</h3>
                                <h3 class="font-size-xs color-secondary">
                                    <img src="/assets/icon/flags/ps.svg" alt="">
                                    <span class="font-weight-normal pl-1">Palestine</span>
                                </h3>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <p class="color-secondary min-width-200 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin ante sed lorem varius molestie. Nam blandit, mi vitae finibus porttitor, leo ipsum faucibus magna, vel cursus metus ex pulvinar ex. Aenean elit ante, tristique at</p>
                                    </div>
                                </div>
                                <a href="/build/help-request-inner.html" class="btn color-grey font-size-xs px-0">
                                    <span class="mr-2">Details</span>
                                    <img src="/assets/icon/viewallgrey.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="help-request-wrapper bg-white b-radius-10 p-2 mb-2">
                        <div class="d-flex flex-wrap justify-content-start">
                            <a href="/build/help-request-inner.html" class="overlay-wrapper">
                                <div class="overlay"></div>
                                <img class="help-image" src="/assets/images/children.png" alt="">
                            </a>
                            <div class="col py-3">
                                <h3 class="font-size-sm color-dark-purple">Help Request Type 3</h3>
                                <h3 class="font-size-xs color-secondary">
                                    <img src="/assets/icon/flags/ps.svg" alt="">
                                    <span class="font-weight-normal pl-1">Palestine</span>
                                </h3>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <p class="color-secondary min-width-200 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin ante sed lorem varius molestie. Nam blandit, mi vitae finibus porttitor, leo ipsum faucibus magna, vel cursus metus ex pulvinar ex. Aenean elit ante, tristique at</p>
                                    </div>
                                </div>
                                <a href="/build/help-request-inner.html" class="btn color-grey font-size-xs px-0">
                                    <span class="mr-2">Details</span>
                                    <img src="/assets/icon/viewallgrey.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </section>

        <section id="latest-projects" class="section-padding pb-0">
            <div class="d-flex flex-wrap justify-content-between">
                <h3 class="large-black-title mb-5">Latest Projects</h3>
                <nav class="d-flex mb-5" aria-label="Page navigation example">
                    <ul class="pagination m-auto flex-wrap">
                        <li class="page-item"><a class="page-link" href="#">
                                << </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">
                                < </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">93</a></li>
                        <li class="page-item"><a class="page-link" href="#">></a></li>
                        <li class="page-item"><a class="page-link" href="#">>></a></li>
                    </ul>
                </nav>
            </div>
            <div class="container mb-3">
                <div class="d-flex row justify-content-between six-projects-wrapper">
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="status-label-wrapper">
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
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="status-label-wrapper">
                            <div>
                                <label class="status-label urgant">Urgant</label>
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
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="status-label-wrapper">
                            <div>
                                <label class="status-label permissible">Zakat permissible</label>
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
                    <div class="latest-project-card mx-2 mb-3">
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
                    <div class="latest-project-card mx-2 mb-3">
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
        </section>

        <section class="section-padding pb-0">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
                <h3 class="large-black-title">Kafalat</h3>
                <a href="#" class="color-dark-purple font-weight-bold">
                    <span class="pr-2">View all</span>
                    <i class="fa fa-right-long"></i>
                </a>
            </div>
            <div class="container mb-3">
                <div class="d-flex row justify-content-between six-projects-wrapper">
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="bg-dark-purple px-3 pt-4 pb-2">
                            <h3 class="font-size-sm">Hamza Naji Jamal</h3>
                            <h3 class="font-size-xs">
                                <img src="/assets/icon/flags/ps.svg" alt="">
                                <span class="font-weight-normal pl-1">Palestine</span>
                            </h3>
                            <div class="row latest-project-numbers flex-nowrap">
                                <div class="col-md-4">
                                    <p class="label opacity-text color-white mb-1">Gender</p>
                                    <p class="value color-white">Male</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="label opacity-text color-white mb-1">Monthly Kafala</p>
                                    <p class="value color-white">BHD 20</p>
                                </div>
                            </div>
                            <a href="#" class="btn font-size-xs color-grey px-0">
                                <span class="mr-2">Details</span>
                                <img src="/assets/icon/viewallgrey.svg" alt="">
                            </a>
                        </div>
                        <div class="body kafala-body pb-0">
                            <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                <span class="color-secondary">No. of months</span>
                                <div class="d-flex kafala-buttons justify-content-between align-items-center">
                                    <button class="btn decrease-5">
                                        <img src="/assets/icon/minus.svg" alt="">
                                    </button>
                                    <input name="num" type="text" value="5">
                                    <button class="btn increase-5">
                                        <img src="/assets/icon/plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-input-wrapper">
                                <div class="extra-gift-wrapper d-flex justify-content-between align-items-center mb-2">
                                    <div class="color-secondary extra-gift d-flex align-items-center">
                                        <span class="pr-1">Extra gift</span>
                                        <div class="fa-question-wrapper">
                                            <i class="fa fa-question cursor-pointer"></i>
                                            <div class="popup">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                        </div>
                                    </div>
                                    <div class="gift-input-wrapper">
                                        <span class="prefix">BHD</span>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between font-size-sm2 font-weight-bold">
                                    <span>Total</span>
                                    <span>1,502</span>
                                </div>
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
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="bg-dark-purple px-3 pt-4 pb-2">
                            <h3 class="font-size-sm">Hamza Naji Jamal</h3>
                            <h3 class="font-size-xs">
                                <img src="/assets/icon/flags/ps.svg" alt="">
                                <span class="font-weight-normal pl-1">Palestine</span>
                            </h3>
                            <div class="row latest-project-numbers flex-nowrap">
                                <div class="col-md-4">
                                    <p class="label opacity-text color-white mb-1">Gender</p>
                                    <p class="value color-white">Male</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="label opacity-text color-white mb-1">Monthly Kafala</p>
                                    <p class="value color-white">BHD 20</p>
                                </div>
                            </div>
                            <a href="#" class="btn font-size-xs color-grey px-0">
                                <span class="mr-2">Details</span>
                                <img src="/assets/icon/viewallgrey.svg" alt="">
                            </a>
                        </div>
                        <div class="body kafala-body pb-0">
                            <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                <span class="color-secondary">No. of months</span>
                                <div class="d-flex kafala-buttons justify-content-between align-items-center">
                                    <button class="btn decrease-5">
                                        <img src="/assets/icon/minus.svg" alt="">
                                    </button>
                                    <input name="num" type="text" value="5">
                                    <button class="btn increase-5">
                                        <img src="/assets/icon/plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-input-wrapper">
                                <div class="extra-gift-wrapper d-flex justify-content-between align-items-center mb-2">
                                    <div class="color-secondary extra-gift d-flex align-items-center">
                                        <span class="pr-1">Extra gift</span>
                                        <div class="fa-question-wrapper">
                                            <i class="fa fa-question cursor-pointer"></i>
                                            <div class="popup">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                        </div>
                                    </div>
                                    <div class="gift-input-wrapper">
                                        <span class="prefix">BHD</span>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between font-size-sm2 font-weight-bold">
                                    <span>Total</span>
                                    <span>1,502</span>
                                </div>
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
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="bg-dark-purple px-3 pt-4 pb-2">
                            <h3 class="font-size-sm">Hamza Naji Jamal</h3>
                            <h3 class="font-size-xs">
                                <img src="/assets/icon/flags/ps.svg" alt="">
                                <span class="font-weight-normal pl-1">Palestine</span>
                            </h3>
                            <div class="row latest-project-numbers flex-nowrap">
                                <div class="col-md-4">
                                    <p class="label opacity-text color-white mb-1">Gender</p>
                                    <p class="value color-white">Male</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="label opacity-text color-white mb-1">Monthly Kafala</p>
                                    <p class="value color-white">BHD 20</p>
                                </div>
                            </div>
                            <a href="#" class="btn font-size-xs color-grey px-0">
                                <span class="mr-2">Details</span>
                                <img src="/assets/icon/viewallgrey.svg" alt="">
                            </a>
                        </div>
                        <div class="body kafala-body pb-0">
                            <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                <span class="color-secondary">No. of months</span>
                                <div class="d-flex kafala-buttons justify-content-between align-items-center">
                                    <button class="btn decrease-5">
                                        <img src="/assets/icon/minus.svg" alt="">
                                    </button>
                                    <input name="num" type="text" value="5">
                                    <button class="btn increase-5">
                                        <img src="/assets/icon/plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-input-wrapper">
                                <div class="extra-gift-wrapper d-flex justify-content-between align-items-center mb-2">
                                    <div class="color-secondary extra-gift d-flex align-items-center">
                                        <span class="pr-1">Extra gift</span>
                                        <div class="fa-question-wrapper">
                                            <i class="fa fa-question cursor-pointer"></i>
                                            <div class="popup">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                        </div>
                                    </div>
                                    <div class="gift-input-wrapper">
                                        <span class="prefix">BHD</span>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between font-size-sm2 font-weight-bold">
                                    <span>Total</span>
                                    <span>1,502</span>
                                </div>
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
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="bg-dark-purple px-3 pt-4 pb-2">
                            <h3 class="font-size-sm">Hamza Naji Jamal</h3>
                            <h3 class="font-size-xs">
                                <img src="/assets/icon/flags/ps.svg" alt="">
                                <span class="font-weight-normal pl-1">Palestine</span>
                            </h3>
                            <div class="row latest-project-numbers flex-nowrap">
                                <div class="col-md-4">
                                    <p class="label opacity-text color-white mb-1">Gender</p>
                                    <p class="value color-white">Male</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="label opacity-text color-white mb-1">Monthly Kafala</p>
                                    <p class="value color-white">BHD 20</p>
                                </div>
                            </div>
                            <a href="#" class="btn font-size-xs color-grey px-0">
                                <span class="mr-2">Details</span>
                                <img src="/assets/icon/viewallgrey.svg" alt="">
                            </a>
                        </div>
                        <div class="body kafala-body pb-0">
                            <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                <span class="color-secondary">No. of months</span>
                                <div class="d-flex kafala-buttons justify-content-between align-items-center">
                                    <button class="btn decrease-5">
                                        <img src="/assets/icon/minus.svg" alt="">
                                    </button>
                                    <input name="num" type="text" value="5">
                                    <button class="btn increase-5">
                                        <img src="/assets/icon/plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-input-wrapper">
                                <div class="extra-gift-wrapper d-flex justify-content-between align-items-center mb-2">
                                    <div class="color-secondary extra-gift d-flex align-items-center">
                                        <span class="pr-1">Extra gift</span>
                                        <div class="fa-question-wrapper">
                                            <i class="fa fa-question cursor-pointer"></i>
                                            <div class="popup">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                        </div>
                                    </div>
                                    <div class="gift-input-wrapper">
                                        <span class="prefix">BHD</span>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between font-size-sm2 font-weight-bold">
                                    <span>Total</span>
                                    <span>1,502</span>
                                </div>
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
                    <div class="latest-project-card mx-2 mb-3">
                        <div class="bg-dark-purple px-3 pt-4 pb-2">
                            <h3 class="font-size-sm">Hamza Naji Jamal</h3>
                            <h3 class="font-size-xs">
                                <img src="/assets/icon/flags/ps.svg" alt="">
                                <span class="font-weight-normal pl-1">Palestine</span>
                            </h3>
                            <div class="row latest-project-numbers flex-nowrap">
                                <div class="col-md-4">
                                    <p class="label opacity-text color-white mb-1">Gender</p>
                                    <p class="value color-white">Male</p>
                                </div>
                                <div class="col-md-8">
                                    <p class="label opacity-text color-white mb-1">Monthly Kafala</p>
                                    <p class="value color-white">BHD 20</p>
                                </div>
                            </div>
                            <a href="#" class="btn font-size-xs color-grey px-0">
                                <span class="mr-2">Details</span>
                                <img src="/assets/icon/viewallgrey.svg" alt="">
                            </a>
                        </div>
                        <div class="body kafala-body pb-0">
                            <div class="d-flex justify-content-center align-items-center latest-project-input-wrapper">
                                <span class="color-secondary">No. of months</span>
                                <div class="d-flex kafala-buttons justify-content-between align-items-center">
                                    <button class="btn decrease-5">
                                        <img src="/assets/icon/minus.svg" alt="">
                                    </button>
                                    <input name="num" type="text" value="5">
                                    <button class="btn increase-5">
                                        <img src="/assets/icon/plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="latest-project-input-wrapper">
                                <div class="extra-gift-wrapper d-flex justify-content-between align-items-center mb-2">
                                    <div class="color-secondary extra-gift d-flex align-items-center">
                                        <span class="pr-1">Extra gift</span>
                                        <div class="fa-question-wrapper">
                                            <i class="fa fa-question cursor-pointer"></i>
                                            <div class="popup">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                                        </div>
                                    </div>
                                    <div class="gift-input-wrapper">
                                        <span class="prefix">BHD</span>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between font-size-sm2 font-weight-bold">
                                    <span>Total</span>
                                    <span>1,502</span>
                                </div>
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
        </section>
    </div>
</main>

<?php require_once "./hmtl-components/en/footer.php" ?>
<?php require_once "./hmtl-components/en/login.php" ?>
<?php require_once "./hmtl-components/en/scripts.php" ?>