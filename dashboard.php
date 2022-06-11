<?php require_once "./hmtl-components/en/head.php" ?>
<main class="dashboard-layout container-fluid bg-dark-purple">
    <div class="nav-container row d-block d-md-none">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <img src="/assets/icon/logo.svg" alt="">
            </a>
            <div class="d-flex">
                <a href="/ar" class="lang-button mx-2 mt-1">
                    ع
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="sidemenu navbar-nav bg-dark-purple mr-auto">
                    <ul class="no-style">

                        <a href="#" class="nav-link font-size-sm active">
                            <i class="fa fa-user"></i>
                            <span class="pl-3">Dashboard</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                <g class="b">
                                    <g transform="translate(0 1.429)">
                                        <path class="c" d="M1.429,4.286H5.714V2.143a.715.715,0,0,1,.714-.714h7.143a.715.715,0,0,1,.714.714V4.286h4.286A1.429,1.429,0,0,1,20,5.714V17.143a1.429,1.429,0,0,1-1.429,1.429H1.429A1.429,1.429,0,0,1,0,17.143V5.714A1.429,1.429,0,0,1,1.429,4.286Zm5.714,0h5.714V2.857H7.143Z" transform="translate(0 -1.429)" />
                                    </g>
                                </g>
                            </svg>
                            <span class="pl-3">My Projects</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                <g class="b">
                                    <g transform="translate(0)">
                                        <path class="a" d="M13.022,8.907c.324,5.067,2.5,6.246,2.614,6.3l.534-1.043c-.019-.01-1.229-.739-1.77-3.561a5.94,5.94,0,0,1,5.388,5.233A31.084,31.084,0,0,1,20,19.414V20H15.312v-.586c0-.564-.419-.953-1.222-1.649-1.38-1.195-3.5-3.04-3.5-7.766V7.07h.606a1.941,1.941,0,0,1,1.831,1.837Z" transform="translate(-10.586)" />
                                        <path class="a" d="M5.909,17.766c-.8.7-1.222,1.084-1.222,1.649V20H0v-.586a31.076,31.076,0,0,1,.211-3.574A5.94,5.94,0,0,1,5.6,10.608c-.541,2.822-1.751,3.551-1.77,3.561l.534,1.043c.117-.059,2.29-1.238,2.614-6.3A1.941,1.941,0,0,1,8.808,7.07h.606V10C9.414,14.725,7.289,16.571,5.909,17.766Z" transform="translate(10.586)" />
                                        <path class="a" d="M5,0C2.7,0,1.015.487,0,1.448A4.153,4.153,0,0,0,2.941,5.5l.224-.1A4.084,4.084,0,0,1,5,4.889a3.807,3.807,0,0,1,1.663.44c.135.061.263.119.4.171A4.5,4.5,0,0,0,9.177,3.992,4.18,4.18,0,0,0,10,1.448C8.984.487,7.3,0,5,0ZM5,6.111A2.445,2.445,0,1,0,7.5,8.556,2.476,2.476,0,0,0,5,6.111Z" transform="translate(15 11) rotate(180)" />
                                    </g>
                                </g>
                            </svg>
                            <span class="pl-3">My Kafalat</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <g class="a">
                                    <rect class="fillnone" width="20" height="20" />
                                    <path class="c" d="M14.476,0H1.523A1.5,1.5,0,0,0,0,1.481V12.963a.376.376,0,0,0,.381.37H2.667v1.482A5.267,5.267,0,0,0,8,20a5.267,5.267,0,0,0,5.333-5.185V13.333h2.285a.376.376,0,0,0,.382-.37V1.481A1.5,1.5,0,0,0,14.476,0ZM8,10A1.926,1.926,0,0,1,6.057,8.095a1.863,1.863,0,0,1,.8-1.532l-.307-2.7a.471.471,0,0,1,.12-.37.492.492,0,0,1,.362-.159H8.971a.489.489,0,0,1,.362.159.474.474,0,0,1,.121.37l-.307,2.7a1.863,1.863,0,0,1,.8,1.532A1.926,1.926,0,0,1,8,10Zm0,7.778a3.01,3.01,0,0,1-3.048-2.963V13.333h6.1v1.482A3.01,3.01,0,0,1,8,17.778Z" transform="translate(18 20) rotate(180)" />
                                </g>
                            </svg>
                            <span class="pl-3">All Transactions</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <i class="fa-solid fa-wallet"></i>
                            <span class="pl-3">My Wallet</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <i class="fa fa-gear"></i>
                            <span class="pl-3">Settings</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm logout">
                            <img src="/assets/icon/logout.svg" alt="">
                            <span class="color-red pl-3">Settings</span>
                        </a>
                    </ul>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3 color-white p-3 d-none d-md-block">
            <div class="sidemenu-wrapper d-flex flex-column justify-content-center">
                <div class="logo-wrapper">
                    <img src="/assets/icon/logo.svg" alt="">
                </div>
                <div class="sidemenu d-flex flex-column align-items-center">
                    <ul class="no-style">

                        <a href="#" class="nav-link font-size-sm active">
                            <i class="fa fa-user"></i>
                            <span class="pl-3">Dashboard</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                <g class="b">
                                    <g transform="translate(0 1.429)">
                                        <path class="c" d="M1.429,4.286H5.714V2.143a.715.715,0,0,1,.714-.714h7.143a.715.715,0,0,1,.714.714V4.286h4.286A1.429,1.429,0,0,1,20,5.714V17.143a1.429,1.429,0,0,1-1.429,1.429H1.429A1.429,1.429,0,0,1,0,17.143V5.714A1.429,1.429,0,0,1,1.429,4.286Zm5.714,0h5.714V2.857H7.143Z" transform="translate(0 -1.429)" />
                                    </g>
                                </g>
                            </svg>
                            <span class="pl-3">My Projects</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                <g class="b">
                                    <g transform="translate(0)">
                                        <path class="a" d="M13.022,8.907c.324,5.067,2.5,6.246,2.614,6.3l.534-1.043c-.019-.01-1.229-.739-1.77-3.561a5.94,5.94,0,0,1,5.388,5.233A31.084,31.084,0,0,1,20,19.414V20H15.312v-.586c0-.564-.419-.953-1.222-1.649-1.38-1.195-3.5-3.04-3.5-7.766V7.07h.606a1.941,1.941,0,0,1,1.831,1.837Z" transform="translate(-10.586)" />
                                        <path class="a" d="M5.909,17.766c-.8.7-1.222,1.084-1.222,1.649V20H0v-.586a31.076,31.076,0,0,1,.211-3.574A5.94,5.94,0,0,1,5.6,10.608c-.541,2.822-1.751,3.551-1.77,3.561l.534,1.043c.117-.059,2.29-1.238,2.614-6.3A1.941,1.941,0,0,1,8.808,7.07h.606V10C9.414,14.725,7.289,16.571,5.909,17.766Z" transform="translate(10.586)" />
                                        <path class="a" d="M5,0C2.7,0,1.015.487,0,1.448A4.153,4.153,0,0,0,2.941,5.5l.224-.1A4.084,4.084,0,0,1,5,4.889a3.807,3.807,0,0,1,1.663.44c.135.061.263.119.4.171A4.5,4.5,0,0,0,9.177,3.992,4.18,4.18,0,0,0,10,1.448C8.984.487,7.3,0,5,0ZM5,6.111A2.445,2.445,0,1,0,7.5,8.556,2.476,2.476,0,0,0,5,6.111Z" transform="translate(15 11) rotate(180)" />
                                    </g>
                                </g>
                            </svg>
                            <span class="pl-3">My Kafalat</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <g class="a">
                                    <rect class="fillnone" width="20" height="20" />
                                    <path class="c" d="M14.476,0H1.523A1.5,1.5,0,0,0,0,1.481V12.963a.376.376,0,0,0,.381.37H2.667v1.482A5.267,5.267,0,0,0,8,20a5.267,5.267,0,0,0,5.333-5.185V13.333h2.285a.376.376,0,0,0,.382-.37V1.481A1.5,1.5,0,0,0,14.476,0ZM8,10A1.926,1.926,0,0,1,6.057,8.095a1.863,1.863,0,0,1,.8-1.532l-.307-2.7a.471.471,0,0,1,.12-.37.492.492,0,0,1,.362-.159H8.971a.489.489,0,0,1,.362.159.474.474,0,0,1,.121.37l-.307,2.7a1.863,1.863,0,0,1,.8,1.532A1.926,1.926,0,0,1,8,10Zm0,7.778a3.01,3.01,0,0,1-3.048-2.963V13.333h6.1v1.482A3.01,3.01,0,0,1,8,17.778Z" transform="translate(18 20) rotate(180)" />
                                </g>
                            </svg>
                            <span class="pl-3">All Transactions</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <i class="fa-solid fa-wallet"></i>
                            <span class="pl-3">My Wallet</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm">
                            <i class="fa fa-gear"></i>
                            <span class="pl-3">Settings</span>
                        </a>
                        <a href="#" class="nav-link font-size-sm logout">
                            <img src="/assets/icon/logout.svg" alt="">
                            <span class="color-red pl-3">Settings</span>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content col-md-9 bg-light-purple color-black p-5">
            <ul class="nav header-nav justify-content-end align-items-center d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link color-black font-weight-bold" href="#">Sadaqat & Kafarat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-black font-weight-bold" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-black font-weight-bold" href="#">Bahrain Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-black font-weight-bold" href="#">Relief</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-black font-weight-bold" href="#">Zakat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-black font-weight-bold" href="#">Kafalat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-black font-weight-bold" href="#">Kaaf?</a>
                </li>
                <li>
                    <form action="/build/search.html" method="post" class="icon-input">
                        <input type="text" placeholder="General search in the website" id="">
                        <input type="image" src="/assets/icon/search.svg" alt="Submit" />
                    </form>
                </li>
            </ul>
            <h1 class="color-dark-purple font-size-xl py-4">Salaam Alaikum, Hussain!</h1>
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-3">
                    <div class="bg-white br-10 h-100 p-4">
                        <h3 class="font-size-md mb-3">Latest donation</h3>
                        <div class="d-flex flex-wrap justify-content-center align-items-start">
                            <img src="/assets/icon/waterwell-border.svg" alt="">
                            <div class="pl-3">
                                <div>Semi-artesian well 60-70m</div>
                                <div class="color-dark-grey">3 Shares</div>
                                <div class="color-dark-purple font-weight-bold font-size-md mt-5">BD 15.9</div>
                                <div class="color-dark-grey">5/10/2020</div>
                            </div>
                        </div>
                        <button class="btn btn-light-purple rounded mx-auto mt-3">
                            <i class="fa-solid fa-arrow-rotate-right"></i>
                            <span class="pl-2">Donate again</span>
                        </button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 mb-3">
                    <div class="bg-white dashboard-latest-notifications br-10 p-4">
                        <h3 class="font-size-md mb-3">
                            <span>Notifications</span>
                            <span class="notifications-count small">3</span>
                        </h3>
                        <div class="row">
                            <div class="col-md-7 mb-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="font-weight-bold mb-1">Hamza Naji Jamal</div>
                                        <div class="color-dark-grey">Monthly Kafala</div>
                                    </div>
                                    <div class="font-weight-bold pr-3 d-block d-md-none">BD 33</div>
                                </div>
                            </div>
                            <div class="col-md-5 mb-2">
                                <div class="d-flex flex-wrap justify-content-center align-items-center">
                                    <div class="font-weight-bold pr-3 d-none d-md-block">BD 33</div>
                                    <button class="btn btn-purple btn-pay rounded">
                                        <span class="pr-2">Pay now</span>
                                        <i class="fa-solid fa-right-long"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-3">
                            <div class="col-md-7 mb-2">
                                <div class="font-weight-bold mb-1">Al Awadhi Family’s well</div>
                                <div class="color-dark-grey">New Report - 1/11/2020</div>
                            </div>
                            <div class="col-md-5 mb-2">
                                <button class="btn btn-white rounded">
                                    <i class="fa fa-file"></i>
                                    <span class="pl-2">Download Report</span>
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-3">
                            <div class="col-md-7 mb-2">
                                <div class="font-weight-bold mb-1">Mosque and Well of the late Abdullah Abdul Rahman and Mohammed Ahmed</div>
                                <div class="color-dark-grey">New Report - 1/11/2020</div>
                            </div>
                            <div class="col-md-5 mb-2">
                                <button class="btn btn-white rounded">
                                    <i class="fa fa-file"></i>
                                    <span class="pl-2">Download Report</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 mt-5">
                <div class="col-xl-4 col-lg-6 mb-3">
                    <div class="bg-dark-purple br-10 h-100 p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="font-size-md">My info</h3>
                            <button class="btn color-white">
                                <i class="fa fa-pencil"></i>
                                <span class="pl-2">Edit</span>
                            </button>
                        </div>
                        <div class="key-value-item d-flex mb-2">
                            <div class="flex-1 font-weight-bold">Name</div>
                            <div class="flex-1">Hussain AlJasmi</div>
                        </div>
                        <div class="key-value-item d-flex mb-2">
                            <div class="flex-1 font-weight-bold">Country</div>
                            <div class="flex-1">
                                <img class="my-info-flag" src="/assets/flags/4x3/bh.svg" alt="">
                                <span class="pl-2">Kingdom of Bahrain</span>
                            </div>
                        </div>
                        <div class="key-value-item d-flex mb-2">
                            <div class="flex-1 font-weight-bold">Email</div>
                            <div class="flex-1">hussain@limefish.com</div>
                        </div>
                        <div class="key-value-item d-flex mb-2">
                            <div class="flex-1 font-weight-bold">Phone number</div>
                            <div class="flex-1">+973 39234567</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 mb-3">
                    <div class="dashboard-box-wrapper bg-white overflow-hidden h-100 p-4 br-10">
                        <div class="row">
                            <div class="col-xl-6 mb-3">
                                <div class="dashboard-title-button-wrapper d-flex flex-column justify-content-between h-100">
                                    <h3 class="font-size-xl mb-3">Lorem ipsum dolor sit amet</h3>
                                    <button class="btn btn-purple btn-lg rounded">+ Add new project</button>
                                </div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <img src="/assets/images/box.png" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "./hmtl-components/en/scripts.php" ?>