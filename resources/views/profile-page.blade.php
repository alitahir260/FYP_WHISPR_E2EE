
<!doctype html >
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar="light" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>    Profile | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://127.0.0.1:8000/build/images/favicon.ico">
    <link rel="stylesheet" href="http://127.0.0.1:8000/build/libs/swiper/swiper-bundle.min.css">
<!-- Layout config Js -->
<script src="http://127.0.0.1:8000/build/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="http://127.0.0.1:8000/build/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="http://127.0.0.1:8000/build/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="http://127.0.0.1:8000/build/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="http://127.0.0.1:8000/build/css/custom.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

    <body>

<!-- <body data-layout="horizontal"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="http://127.0.0.1:8000/build/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="http://127.0.0.1:8000/build/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="http://127.0.0.1:8000/build/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="http://127.0.0.1:8000/build/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                <a href="index" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Angela Bernier</h6>
                                            <span class="fs-11 mb-0 text-muted">Manager</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">David Grasso</h6>
                                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Mike Bunch</h6>
                                            <span class="fs-11 mb-0 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="text-center pt-3 pb-1">
                            <a href="pages-search-results" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown ms-1 topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="http://127.0.0.1:8000/build/images/flags/us.svg" class="me-2 rounded" height="20" alt="Header Language" height="16">
                                            </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/en" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                            <img src="http://127.0.0.1:8000/build/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="20">
                            <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/sp" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                            <img src="http://127.0.0.1:8000/build/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="20">
                            <span class="align-middle">Española</span>
                        </a>

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/gr" class="dropdown-item notify-item language" data-lang="gr" title="German">
                            <img src="http://127.0.0.1:8000/build/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="20"> <span class="align-middle">Deutsche</span>
                        </a>

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/it" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                            <img src="http://127.0.0.1:8000/build/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="20">
                            <span class="align-middle">Italiana</span>
                        </a>

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/ru" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                            <img src="http://127.0.0.1:8000/build/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="20">
                            <span class="align-middle">русский</span>
                        </a>

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/ch" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                            <img src="http://127.0.0.1:8000/build/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="20">
                            <span class="align-middle">中国人</span>
                        </a>

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/fr" class="dropdown-item notify-item language" data-lang="fr" title="French">
                            <img src="http://127.0.0.1:8000/build/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="20">
                            <span class="align-middle">français</span>
                        </a>

                        <!-- item-->
                        <a href="http://127.0.0.1:8000/index/ae" class="dropdown-item notify-item language" data-lang="ae" title="Arabic">
                            <img src="http://127.0.0.1:8000/build/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                            <span class="align-middle">Arabic</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-category-alt fs-22'></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                        <i class="ri-arrow-right-s-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="http://127.0.0.1:8000/build/images/brands/github.png" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="http://127.0.0.1:8000/build/images/brands/bitbucket.png" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="http://127.0.0.1:8000/build/images/brands/dribbble.png" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="http://127.0.0.1:8000/build/images/brands/dropbox.png" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="http://127.0.0.1:8000/build/images/brands/mail_chimp.png" alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#!">
                                        <img src="http://127.0.0.1:8000/build/images/brands/slack.png" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-shopping-bag fs-22'></i>
                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                </div>
                                <div class="col-auto">
                                    <span class="badge bg-warning-subtle text-warning fs-13"><span class="cartitem-badge">7</span> items
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 300px;">
                            <div class="p-2">
                                <div class="text-center empty-cart" id="empty-cart">
                                    <div class="avatar-md mx-auto my-3">
                                        <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                            <i class='bx bx-cart'></i>
                                        </div>
                                    </div>
                                    <h5 class="mb-3">Your Cart is Empty!</h5>
                                    <a href="#" class="btn btn-success w-md mb-3">Shop Now</a>
                                </div>
                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="http://127.0.0.1:8000/build/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details" class="text-reset">Branded
                                                    T-Shirts</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>10 x $32</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="http://127.0.0.1:8000/build/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details" class="text-reset">Bentwood Chair</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>5 x $18</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="http://127.0.0.1:8000/build/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details" class="text-reset">
                                                    Borosil Paper Cup</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>3 x $250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="http://127.0.0.1:8000/build/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details" class="text-reset">Gray
                                                    Styled T-Shirt</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>1 x $1250</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                    <div class="d-flex align-items-center">
                                        <img src="http://127.0.0.1:8000/build/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="mt-0 mb-1 fs-14">
                                                <a href="apps-ecommerce-product-details" class="text-reset">Stillbird Helmet</a>
                                            </h6>
                                            <p class="mb-0 fs-12 text-muted">
                                                Quantity: <span>2 x $495</span>
                                            </p>
                                        </div>
                                        <div class="px-2">
                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                        </div>
                                        <div class="ps-2">
                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                            <div class="d-flex justify-content-between align-items-center pb-3">
                                <h5 class="m-0 text-muted">Total:</h5>
                                <div class="px-2">
                                    <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                </div>
                            </div>

                            <a href="apps-ecommerce-checkout" class="btn btn-success text-center w-100">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">
                                        <span class="badge bg-light-subtle text-body fs-13"> 4 New</span>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pt-2">
                                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                            All (4)
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                            Messages
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                            Alerts
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                        Optimization <span class="text-secondary">reward</span> is
                                                        ready!
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                    <label class="form-check-label" for="all-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                    <label class="form-check-label" for="all-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                    <i class='bx bx-message-square-dots'></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                    <label class="form-check-label" for="all-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                    <label class="form-check-label" for="all-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center view-all">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                                    <label class="form-check-label" for="messages-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                                    <label class="form-check-label" for="messages-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                                    <label class="form-check-label" for="messages-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                                    <label class="form-check-label" for="messages-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center view-all">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>

                            <div class="notification-actions" id="notification-actions">
                                <div class="d-flex text-muted justify-content-center">
                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="http://127.0.0.1:8000/images/avatar-1.jpg" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">admin</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Anna!</h6>
                        <a class="dropdown-item" href="pages-profile"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="apps-chat"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="apps-tasks-kanban"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                        <a class="dropdown-item" href="pages-faqs"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-profile"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                        <a class="dropdown-item" href="pages-profile-settings"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-lockscreen-basic"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                        <a class="dropdown-item " href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1"></i> <span key="t-logout">Logout</span></a>
                        <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="QwOemW3h20lU719VLJYoeDA3g9yCsM3DvUHafAJy" autocomplete="off">                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="http://127.0.0.1:8000/build/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="http://127.0.0.1:8000/build/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="http://127.0.0.1:8000/build/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="http://127.0.0.1:8000/build/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="bx bxs-dashboard"></i> <span>Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics" class="nav-link">Analytics</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm" class="nav-link">CRM</a>
                            </li>
                            <li class="nav-item">
                                <a href="index" class="nav-link">Ecommerce</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crypto" class="nav-link">Crypto</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-projects" class="nav-link">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-nft" class="nav-link"> NFT </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-job" class="nav-link">Job</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="bx bx-layer"></i> <span>Apps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    Calendar                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCalendar">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-calendar" class="nav-link"> Main Calender </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-calendar-month-grid" class="nav-link"> Month Grid </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail">
                                    Email                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEmail">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-mailbox" class="nav-link">Mailbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates">
                                                Email Templates                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-email-basic" class="nav-link"> Basic Action </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-email-ecommerce" class="nav-link"> Ecommerce Action </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">Ecommerce                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products" class="nav-link">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details" class="nav-link">Product Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product" class="nav-link">Create Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-orders" class="nav-link">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-order-details" class="nav-link">Order Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-customers" class="nav-link">Customers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-cart" class="nav-link">Shopping Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-checkout" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-sellers" class="nav-link">Sellers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-seller-details" class="nav-link">Seller Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">Projects                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-projects-list" class="nav-link">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-overview" class="nav-link">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-create" class="nav-link">Create Project</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks">Tasks                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tasks-kanban" class="nav-link">Kanban Board</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-list-view" class="nav-link">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-details" class="nav-link">Task Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM">CRM                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCRM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crm-contacts" class="nav-link">Contacts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-companies" class="nav-link">Companies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-deals" class="nav-link">Deals</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-leads" class="nav-link">Leads</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto">Crypto                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCrypto">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crypto-transactions" class="nav-link">Transactions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-buy-sell" class="nav-link">Buy & Sell</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-orders" class="nav-link">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-wallet" class="nav-link">My Wallet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-ico" class="nav-link">ICO List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-kyc" class="nav-link">KYC Application</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">Invoices                                </a>
                                <div class="collapse menu-dropdown" id="sidebarInvoices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-invoices-list" class="nav-link">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-details" class="nav-link">Invoice Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-create" class="nav-link">Create Invoice</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets">Support Tickets                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTickets">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tickets-list" class="nav-link">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tickets-details" class="nav-link">Ticket Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarnft">
                                    NFT Marketplace                                </a>
                                <div class="collapse menu-dropdown" id="sidebarnft">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-nft-marketplace" class="nav-link"> Marketplace </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-explore" class="nav-link"> Explore Now </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-auction" class="nav-link"> Live Auction </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-item-details" class="nav-link"> Item Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-collections" class="nav-link"> Collections </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-creators" class="nav-link"> Creators </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-ranking" class="nav-link"> Ranking </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-wallet" class="nav-link"> Wallet Connect </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-create" class="nav-link"> Create NFT </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-file-manager" class="nav-link"> <span>File Manager</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-todo" class="nav-link"> <span>To Do</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarjobs" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs">Jobs</a>
                                <div class="collapse menu-dropdown" id="sidebarjobs">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-job-statistics" class="nav-link"> Statistics </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarJoblists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarJoblists">
                                                Job Lists                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarJoblists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-lists" class="nav-link"> List                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-grid-lists" class="nav-link"> Grid </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-details" class="nav-link"> Overview</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCandidatelists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCandidatelists">
                                                Candidate Lists                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-lists" class="nav-link"> List View                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-grid" class="nav-link"> Grid View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-application" class="nav-link"> Application </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-new" class="nav-link"> New Job </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-companies-lists" class="nav-link"> Companies List </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-categories" class="nav-link"> Job Categories</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key" class="nav-link">API Key</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="bx bx-layout"></i> <span>Layouts</span><span class="badge badge-pill bg-danger">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-vertical" target="_blank" class="nav-link">Vertical</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached" target="_blank" class="nav-link">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column" target="_blank" class="nav-link">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered" target="_blank" class="nav-link">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="bx bx-user-circle"></i> <span>Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">Sign In                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signin-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signin-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">Sign Up                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signup-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signup-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass">Password Reset                                </a>
                                <div class="collapse menu-dropdown" id="sidebarResetPass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass">Password Create                                </a>
                                <div class="collapse menu-dropdown" id="sidebarchangePass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-change-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-change-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen">Lock Screen                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout">Logout                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLogout">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-logout-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-logout-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg">Success Message                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-success-msg-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-success-msg-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep">Two Step Verification                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-twostep-basic" class="nav-link">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-twostep-cover" class="nav-link">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors">Errors                                </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404-basic" class="nav-link">404 Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-cover" class="nav-link">404 Cover</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-alt" class="nav-link">404 Alt</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500" class="nav-link">500</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline" class="nav-link">Offline Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="bx bx-file"></i> <span>Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link">Starter</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">Profile                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-profile" class="nav-link">Simple Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-profile-settings" class="nav-link">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="pages-team" class="nav-link">Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-timeline" class="nav-link">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs" class="nav-link">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing" class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-gallery" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance" class="nav-link">Maintenance</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon" class="nav-link">Coming Soon</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-sitemap" class="nav-link">Sitemap</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-search-results" class="nav-link">Search Results</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-privacy-policy" class="nav-link">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-term-conditions" class="nav-link">Term & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span>Landing</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing" class="nav-link"> One Page </a>
                            </li>
                            <li class="nav-item">
                                <a href="nft-landing" class="nav-link"> NFT Landing</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing" class="nav-link">Job</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span>Components</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="bx bx-palette"></i> <span>Base UI</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts" class="nav-link">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges" class="nav-link">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons" class="nav-link">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors" class="nav-link">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards" class="nav-link">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel" class="nav-link">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns" class="nav-link">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid" class="nav-link">Grid</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-images" class="nav-link">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs" class="nav-link">Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions" class="nav-link">Accordion & Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals" class="nav-link">Modals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas" class="nav-link">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders" class="nav-link">Placeholders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress" class="nav-link">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications" class="nav-link">Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-media" class="nav-link">Media object</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-embed-video" class="nav-link">Embed Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-typography" class="nav-link">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-lists" class="nav-link">Lists</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="ui-links" class="nav-link"><span>Links</span> <span class="badge badge-pill bg-success">New</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-general" class="nav-link">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-ribbons" class="nav-link">Ribbons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-utilities" class="nav-link">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="bx bx-briefcase-alt"></i> <span>Advance UI</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts" class="nav-link">Sweet Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable" class="nav-link">Nestable List</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar" class="nav-link">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-animation" class="nav-link">Animation</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-tour" class="nav-link">Tour</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper" class="nav-link">Swiper Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings" class="nav-link">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight" class="nav-link">Highlight</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy" class="nav-link">ScrollSpy</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets">
                        <i class="bx bx-aperture"></i> <span>Widgets</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="bx bx-receipt"></i> <span>Forms</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements" class="nav-link">Basic Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select" class="nav-link">Form Select</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios" class="nav-link">Checkboxs & Radios</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers" class="nav-link">Pickers</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-masks" class="nav-link">Input Masks</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-advanced" class="nav-link">Advanced</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-range-sliders" class="nav-link">Range Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-validation" class="nav-link">Validation</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-wizard" class="nav-link">Wizard</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-editors" class="nav-link">Editors</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-file-uploads" class="nav-link">File Uploads</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-layouts" class="nav-link">Form Layouts</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select2" class="nav-link">Select2 </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="bx bx-table"></i> <span>Tables</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic" class="nav-link">Basic Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs" class="nav-link">Grid Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs" class="nav-link">List Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables" class="nav-link">Datatables </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="bx bx-doughnut-chart"></i> <span>Charts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts">Apexcharts                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="charts-apex-line" class="nav-link">Line</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-area" class="nav-link">Area</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-column" class="nav-link">Column</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bar" class="nav-link">Bar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-mixed" class="nav-link">Mixed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-timeline" class="nav-link">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-range-area" class="nav-link"><span>Range Area</span> <span class="badge badge-pill bg-success">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-funnel" class="nav-link"><span>Funnel</span> <span class="badge badge-pill bg-success">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-candlestick" class="nav-link">Candlstick</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-boxplot" class="nav-link">Boxplot</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bubble" class="nav-link">Bubble</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-scatter" class="nav-link">Scatter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-heatmap" class="nav-link">Heatmap</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-treemap" class="nav-link">Treemap</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-pie" class="nav-link">Pie</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radialbar" class="nav-link">Radialbar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radar" class="nav-link">Radar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-polar" class="nav-link">Polar Area</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="charts-chartjs" class="nav-link">Chartjs</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-echarts" class="nav-link">Echarts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="bx bx-tone"></i> <span>Icons</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix" class="nav-link"><span>Remix</span><span class="badge badge-pill bg-info">v3.5</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-boxicons" class="nav-link"><span>Boxicons</span><span class="badge badge-pill bg-info">v2.1.4</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-materialdesign" class="nav-link"><span>Material Design</span><span class="badge badge-pill bg-info">v7.2.96</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-lineawesome" class="nav-link">Line Awesome</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-feather" class="nav-link"><span>Feather</span><span class="badge badge-pill bg-info">v4.29</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-crypto" class="nav-link"> <span>Crypto SVG</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="bx bx-map-alt"></i> <span>Maps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google" class="nav-link">
                                    Google                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector" class="nav-link">
                                    Vector                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet" class="nav-link">
                                    Leaflet                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="bx bx-sitemap"></i> <span>Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Level 1.1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount">Level 1.2                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Level 2.1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm">Level 2.2                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Level 3.1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Level 3.2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="http://127.0.0.1:8000/build/images/profile-bg.jpg" alt="" class="profile-wid-img" />
        </div>
    </div>

    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src=" http://127.0.0.1:8000/images/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">Anna Adame</h3>
                    <p class="text-white text-opacity-75">Owner & Founder</p>
                    <div class="hstack text-white-50 gap-1">
                        <div class="me-2"><i
                                class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>California,
                            United States</div>
                        <div><i class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>Themesbrand
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-12 col-lg-auto order-last order-lg-0">
                <div class="row text text-white-50 text-center">
                    <div class="col-lg-6 col-4">
                        <div class="p-2">
                            <h4 class="text-white mb-1">24.3K</h4>
                            <p class="fs-14 mb-0">Followers</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-4">
                        <div class="p-2">
                            <h4 class="text-white mb-1">1.3K</h4>
                            <p class="fs-14 mb-0">Following</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex profile-wrapper">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Overview</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Activities</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Projects</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                    class="d-none d-md-inline-block">Documents</span>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-shrink-0">
                        <a href="pages-profile-settings" class="btn btn-success"><i
                                class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content pt-4 text-muted">
                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                        <div class="row">
                            <div class="col-xxl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-5">Complete Your Profile</h5>
                                        <div class="progress animated-progress custom-progress progress-label">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <div class="label">30%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Info</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Full Name :</th>
                                                        <td class="text-muted">Anna Adame</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Mobile :</th>
                                                        <td class="text-muted">+(1) 987 6543</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">E-mail :</th>
                                                        <td class="text-muted">daveadame@velzon.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Location :</th>
                                                        <td class="text-muted">California, United States
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Joining Date</th>
                                                        <td class="text-muted">24 Nov 2021</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Portfolio</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                        <i class="ri-github-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                        <i class="ri-global-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-success">
                                                        <i class="ri-dribbble-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                        <i class="ri-pinterest-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Skills</h5>
                                        <div class="d-flex flex-wrap gap-2 fs-15">
                                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Photoshop</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">illustrator</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">HTML</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">CSS</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Javascript</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Php</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Python</a>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-0">Suggestions</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a href="#" role="button" id="dropdownMenuLink2"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill fs-14"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink2">
                                                        <li><a class="dropdown-item" href="#">View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Edit</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center py-3">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" alt=""
                                                        class="img-fluid rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h5 class="fs-13 mb-1">Esther James</h5>
                                                        <p class="fs-13 text-muted mb-0">Frontend
                                                            Developer</p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i
                                                            class="ri-user-add-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center py-3">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg" alt=""
                                                        class="img-fluid rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h5 class="fs-13 mb-1">Jacqueline Steve</h5>
                                                        <p class="fs-13 text-muted mb-0">UI/UX Designer
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i
                                                            class="ri-user-add-line align-middle"></i></button>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center py-3">
                                                <div class="avatar-xs flex-shrink-0 me-3">
                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg" alt=""
                                                        class="img-fluid rounded-circle" />
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h5 class="fs-13 mb-1">George Whalen</h5>
                                                        <p class="fs-13 text-muted mb-0">Backend
                                                            Developer</p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i
                                                            class="ri-user-add-line align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div>
                                <!--end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-0">Popular Posts</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a href="#" role="button" id="dropdownMenuLink1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill fs-14"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuLink1">
                                                        <li><a class="dropdown-item" href="#">View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Edit</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <img src="http://127.0.0.1:8000/build/images/small/img-4.jpg" alt="" height="50"
                                                    class="rounded" />
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <a href="javascript:void(0);">
                                                    <h6 class="text-truncate fs-13">Design your apps in
                                                        your own way</h6>
                                                </a>
                                                <p class="text-muted mb-0">15 Dec 2021</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <img src="http://127.0.0.1:8000/build/images/small/img-5.jpg" alt="" height="50"
                                                    class="rounded" />
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <a href="javascript:void(0);">
                                                    <h6 class="text-truncate fs-13">Smartest
                                                        Applications for Business</h6>
                                                </a>
                                                <p class="text-muted mb-0">28 Nov 2021</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="http://127.0.0.1:8000/build/images/small/img-6.jpg" alt="" height="50"
                                                    class="rounded" />
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <a href="javascript:void(0);">
                                                    <h6 class="text-truncate fs-13">How to get creative
                                                        in your work</h6>
                                                </a>
                                                <p class="text-muted mb-0">21 Nov 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-xxl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">About</h5>
                                        <p>Hi I'm Anna Adame, It will be as simple as Occidental; in
                                            fact, it will be Occidental. To an English person, it will
                                            seem like simplified English, as a skeptical Cambridge
                                            friend of mine told me what Occidental is European languages
                                            are members of the same family.</p>
                                        <p>You always want to make sure that your fonts work well
                                            together and try to limit the number of fonts you use to
                                            three or less. Experiment and play around with the fonts
                                            that you already have in the software you’re working with
                                            reputable font websites. This may be the most commonly
                                            encountered tip I received from the designers I spoke with.
                                            They highly encourage that you use different fonts in one
                                            design, but do not over-exaggerate and go overboard.</p>
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div
                                                            class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-user-2-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="mb-1">Designation :</p>
                                                        <h6 class="text-truncate mb-0">Lead Designer /
                                                            Developer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-6 col-md-4">
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div
                                                            class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-global-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="mb-1">Website :</p>
                                                        <a href="#" class="fw-semibold">www.velzon.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div><!-- end card -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0  me-2">Recent Activity</h4>
                                                <div class="flex-shrink-0 ms-auto">
                                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#today"
                                                                role="tab">
                                                                Today
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#weekly"
                                                                role="tab">
                                                                Weekly
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#monthly"
                                                                role="tab">
                                                                Monthly
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content text-muted">
                                                    <div class="tab-pane active" id="today" role="tabpanel">
                                                        <div class="profile-timeline">
                                                            <div class="accordion accordion-flush" id="todayExample">
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="headingOne">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapseOne"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Jacqueline Steve
                                                                                    </h6>
                                                                                    <small class="text-muted">We
                                                                                        has changed 2
                                                                                        attributes on
                                                                                        05:16PM</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapseOne"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="headingOne"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            In an awareness campaign, it
                                                                            is vital for people to begin
                                                                            put 2 and 2 together and
                                                                            begin to recognize your
                                                                            cause. Too much or too
                                                                            little spacing, as in the
                                                                            example below, can make
                                                                            things unpleasant for the
                                                                            reader. The goal is to make
                                                                            your text as comfortable to
                                                                            read as possible. A
                                                                            wonderful serenity has taken
                                                                            possession of my entire
                                                                            soul, like these sweet
                                                                            mornings of spring which I
                                                                            enjoy with my whole heart.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="headingTwo">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapseTwo"
                                                                            aria-expanded="false">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0 avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title bg-light text-success rounded-circle">
                                                                                        M
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Megan Elmore
                                                                                    </h6>
                                                                                    <small class="text-muted">Adding
                                                                                        a new event with
                                                                                        attachments -
                                                                                        04:45PM</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapseTwo"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="headingTwo"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            <div class="row g-2">
                                                                                <div class="col-auto">
                                                                                    <div
                                                                                        class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                        <div class="flex-shrink-0">
                                                                                            <i
                                                                                                class="ri-image-2-line fs-17 text-danger"></i>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                            <h6><a href="javascript:void(0);"
                                                                                                    class="stretched-link">Business
                                                                                                    Template
                                                                                                    -
                                                                                                    UI/UX
                                                                                                    design</a>
                                                                                            </h6>
                                                                                            <small>685
                                                                                                KB</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <div
                                                                                        class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                        <div class="flex-shrink-0">
                                                                                            <i
                                                                                                class="ri-file-zip-line fs-17 text-info"></i>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                            <h6><a href="javascript:void(0);"
                                                                                                    class="stretched-link">Bank
                                                                                                    Management
                                                                                                    System
                                                                                                    -
                                                                                                    PSD</a>
                                                                                            </h6>
                                                                                            <small>8.78
                                                                                                MB</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="headingThree">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapsethree"
                                                                            aria-expanded="false">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        New ticket
                                                                                        received</h6>
                                                                                    <small class="text-muted mb-2">User
                                                                                        <span
                                                                                            class="text-secondary">Erica245</span>
                                                                                        submitted a
                                                                                        ticket -
                                                                                        02:33PM</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="headingFour">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapseFour"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0 avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title bg-light text-muted rounded-circle">
                                                                                        <i class="ri-user-3-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Nancy Martino
                                                                                    </h6>
                                                                                    <small class="text-muted">Commented
                                                                                        on
                                                                                        12:57PM</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapseFour"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="headingFour"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                            " A wonderful serenity has
                                                                            taken possession of my
                                                                            entire soul, like these
                                                                            sweet mornings of spring
                                                                            which I enjoy with my whole
                                                                            heart. Each design is a new,
                                                                            unique piece of art birthed
                                                                            into this world, and while
                                                                            you have the opportunity to
                                                                            be creative and make your
                                                                            own style choices. "
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="headingFive">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapseFive"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Lewis Arnold
                                                                                    </h6>
                                                                                    <small class="text-muted">Create
                                                                                        new project
                                                                                        buildng product
                                                                                        -
                                                                                        10:05AM</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapseFive"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="headingFive"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            <p class="text-muted mb-2">
                                                                                Every team project can
                                                                                have a velzon. Use the
                                                                                velzon to share
                                                                                information with your
                                                                                team to understand and
                                                                                contribute to your
                                                                                project.</p>
                                                                            <div class="avatar-group">
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title="Christi">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-xs">
                                                                                </a>
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title="Frank Hook">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-xs">
                                                                                </a>
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title=" Ruby">
                                                                                    <div class="avatar-xs">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                                            R
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title="more">
                                                                                    <div class="avatar-xs">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle">
                                                                                            2+
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end accordion-->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="weekly" role="tabpanel">
                                                        <div class="profile-timeline">
                                                            <div class="accordion accordion-flush" id="weeklyExample">
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading6">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse6"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Joseph Parker
                                                                                    </h6>
                                                                                    <small class="text-muted">New
                                                                                        people joined
                                                                                        with our company
                                                                                        -
                                                                                        Yesterday</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse6"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="heading6"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            It makes a statement, it’s
                                                                            impressive graphic design.
                                                                            Increase or decrease the
                                                                            letter spacing depending on
                                                                            the situation and try, try
                                                                            again until it looks right,
                                                                            and each letter has the
                                                                            perfect spot of its own.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading7">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse7"
                                                                            aria-expanded="false">
                                                                            <div class="d-flex">
                                                                                <div class="avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title rounded-circle bg-light text-danger">
                                                                                        <i
                                                                                            class="ri-shopping-bag-line"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Your order is
                                                                                        placed <span
                                                                                            class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                                    </h6>
                                                                                    <small class="text-muted">These
                                                                                        customers can
                                                                                        rest assured
                                                                                        their order has
                                                                                        been placed - 1
                                                                                        week Ago</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading8">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse8"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0 avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title bg-light text-success rounded-circle">
                                                                                        <i class="ri-home-3-line"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Velzon admin
                                                                                        dashboard
                                                                                        templates layout
                                                                                        upload</h6>
                                                                                    <small class="text-muted">We
                                                                                        talked about a
                                                                                        project on
                                                                                        linkedin - 1
                                                                                        week Ago</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse8"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="heading8"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                            Powerful, clean & modern
                                                                            responsive bootstrap 5 admin
                                                                            template. The maximum file
                                                                            size for uploads in this
                                                                            demo :
                                                                            <div class="row mt-2">
                                                                                <div class="col-xxl-6">
                                                                                    <div
                                                                                        class="row border border-dashed gx-2 p-2">
                                                                                        <div class="col-3">
                                                                                            <img src="http://127.0.0.1:8000/build/images/small/img-3.jpg"
                                                                                                alt=""
                                                                                                class="img-fluid rounded" />
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-3">
                                                                                            <img src="http://127.0.0.1:8000/build/images/small/img-5.jpg"
                                                                                                alt=""
                                                                                                class="img-fluid rounded" />
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-3">
                                                                                            <img src="http://127.0.0.1:8000/build/images/small/img-7.jpg"
                                                                                                alt=""
                                                                                                class="img-fluid rounded" />
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                        <div class="col-3">
                                                                                            <img src="http://127.0.0.1:8000/build/images/small/img-9.jpg"
                                                                                                alt=""
                                                                                                class="img-fluid rounded" />
                                                                                        </div>
                                                                                        <!--end col-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading9">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse9"
                                                                            aria-expanded="false">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-6.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        New ticket
                                                                                        created <span
                                                                                            class="badge bg-info-subtle text-info align-middle">Inprogress</span>
                                                                                    </h6>
                                                                                    <small class="text-muted mb-2">User
                                                                                        <span
                                                                                            class="text-secondary">Jack365</span>
                                                                                        submitted a
                                                                                        ticket - 2 week
                                                                                        Ago</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading10">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse10"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Jennifer Carter
                                                                                    </h6>
                                                                                    <small class="text-muted">Commented
                                                                                        - 4 week
                                                                                        Ago</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse10"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="heading10"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            <p class="text-muted fst-italic mb-2">
                                                                                " This is an awesome
                                                                                admin dashboard
                                                                                template. It is
                                                                                extremely well
                                                                                structured and uses
                                                                                state of the art
                                                                                components (e.g. one of
                                                                                the only templates using
                                                                                boostrap 5.1.3 so far).
                                                                                I integrated it into a
                                                                                Rails 6 project. Needs
                                                                                manual integration work
                                                                                of course but the
                                                                                template structure made
                                                                                it easy. "</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end accordion-->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="monthly" role="tabpanel">
                                                        <div class="profile-timeline">
                                                            <div class="accordion accordion-flush" id="monthlyExample">
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading11">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse11"
                                                                            aria-expanded="false">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0 avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title bg-light text-success rounded-circle">
                                                                                        M
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Megan Elmore
                                                                                    </h6>
                                                                                    <small class="text-muted">Adding
                                                                                        a new event with
                                                                                        attachments - 1
                                                                                        month
                                                                                        Ago.</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse11"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="heading11"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            <div class="row g-2">
                                                                                <div class="col-auto">
                                                                                    <div
                                                                                        class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                        <div class="flex-shrink-0">
                                                                                            <i
                                                                                                class="ri-image-2-line fs-17 text-danger"></i>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                            <h6><a href="javascript:void(0);"
                                                                                                    class="stretched-link">Business
                                                                                                    Template
                                                                                                    -
                                                                                                    UI/UX
                                                                                                    design</a>
                                                                                            </h6>
                                                                                            <small>685
                                                                                                KB</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <div
                                                                                        class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                        <div class="flex-shrink-0">
                                                                                            <i
                                                                                                class="ri-file-zip-line fs-17 text-info"></i>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                            <h6><a href="javascript:void(0);"
                                                                                                    class="stretched-link">Bank
                                                                                                    Management
                                                                                                    System
                                                                                                    -
                                                                                                    PSD</a>
                                                                                            </h6>
                                                                                            <small>8.78
                                                                                                MB</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <div
                                                                                        class="d-flex border border-dashed p-2 rounded position-relative">
                                                                                        <div class="flex-shrink-0">
                                                                                            <i
                                                                                                class="ri-file-zip-line fs-17 text-info"></i>
                                                                                        </div>
                                                                                        <div class="flex-grow-1 ms-2">
                                                                                            <h6><a href="javascript:void(0);"
                                                                                                    class="stretched-link">Bank
                                                                                                    Management
                                                                                                    System
                                                                                                    -
                                                                                                    PSD</a>
                                                                                            </h6>
                                                                                            <small>8.78
                                                                                                MB</small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading12">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse12"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Jacqueline Steve
                                                                                    </h6>
                                                                                    <small class="text-muted">We
                                                                                        has changed 2
                                                                                        attributes on 3
                                                                                        month
                                                                                        Ago</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse12"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="heading12"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            In an awareness campaign, it
                                                                            is vital for people to begin
                                                                            put 2 and 2 together and
                                                                            begin to recognize your
                                                                            cause. Too much or too
                                                                            little spacing, as in the
                                                                            example below, can make
                                                                            things unpleasant for the
                                                                            reader. The goal is to make
                                                                            your text as comfortable to
                                                                            read as possible. A
                                                                            wonderful serenity has taken
                                                                            possession of my entire
                                                                            soul, like these sweet
                                                                            mornings of spring which I
                                                                            enjoy with my whole heart.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading13">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse13"
                                                                            aria-expanded="false">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        New ticket
                                                                                        received</h6>
                                                                                    <small class="text-muted mb-2">User
                                                                                        <span
                                                                                            class="text-secondary">Erica245</span>
                                                                                        submitted a
                                                                                        ticket - 5 month
                                                                                        Ago</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading14">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse14"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0 avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title bg-light text-muted rounded-circle">
                                                                                        <i class="ri-user-3-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Nancy Martino
                                                                                    </h6>
                                                                                    <small class="text-muted">Commented
                                                                                        on 24 Nov,
                                                                                        2021.</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse14"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="heading14"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5 fst-italic">
                                                                            " A wonderful serenity has
                                                                            taken possession of my
                                                                            entire soul, like these
                                                                            sweet mornings of spring
                                                                            which I enjoy with my whole
                                                                            heart. Each design is a new,
                                                                            unique piece of art birthed
                                                                            into this world, and while
                                                                            you have the opportunity to
                                                                            be creative and make your
                                                                            own style choices. "
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item border-0">
                                                                    <div class="accordion-header" id="heading15">
                                                                        <a class="accordion-button p-2 shadow-none"
                                                                            data-bs-toggle="collapse" href="#collapse15"
                                                                            aria-expanded="true">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg"
                                                                                        alt=""
                                                                                        class="avatar-xs rounded-circle" />
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="fs-14 mb-1">
                                                                                        Lewis Arnold
                                                                                    </h6>
                                                                                    <small class="text-muted">Create
                                                                                        new project
                                                                                        buildng product
                                                                                        - 8 month
                                                                                        Ago</small>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse15"
                                                                        class="accordion-collapse collapse show"
                                                                        aria-labelledby="heading15"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body ms-2 ps-5">
                                                                            <p class="text-muted mb-2">
                                                                                Every team project can
                                                                                have a velzon. Use the
                                                                                velzon to share
                                                                                information with your
                                                                                team to understand and
                                                                                contribute to your
                                                                                project.</p>
                                                                            <div class="avatar-group">
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title="Christi">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-xs">
                                                                                </a>
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title="Frank Hook">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle avatar-xs">
                                                                                </a>
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title=" Ruby">
                                                                                    <div class="avatar-xs">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                                            R
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                                <a href="javascript: void(0);"
                                                                                    class="avatar-group-item"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-placement="top" title=""
                                                                                    data-bs-original-title="more">
                                                                                    <div class="avatar-xs">
                                                                                        <div
                                                                                            class="avatar-title rounded-circle">
                                                                                            2+
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end accordion-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Projects</h5>
                                        <!-- Swiper -->
                                        <div class="swiper project-swiper mt-n4">
                                            <div class="d-flex justify-content-end gap-2 mb-2">
                                                <div class="slider-button-prev">
                                                    <div class="avatar-title fs-18 rounded px-1">
                                                        <i class="ri-arrow-left-s-line"></i>
                                                    </div>
                                                </div>
                                                <div class="slider-button-next">
                                                    <div class="avatar-title fs-18 rounded px-1">
                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-success mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">ABC
                                                                            Project Customization</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span class="fw-semibold text-dark">4
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="badge bg-warning-subtle text-warning fs-10">
                                                                        Inprogress</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                                        A
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Client -
                                                                            John</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span class="fw-semibold text-dark">1
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="badge bg-success-subtle text-success fs-10">
                                                                        Completed</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                                        C
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
                                                </div><!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-info mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Brand logo
                                                                            Design</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span class="fw-semibold text-dark">2
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="badge bg-warning-subtle text-warning fs-10">
                                                                        Inprogress</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
                                                </div><!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-danger mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Project
                                                                            update</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span class="fw-semibold text-dark">4
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="badge bg-success-subtle text-success fs-10">
                                                                        Completed</div>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end slide item -->
                                                <div class="swiper-slide">
                                                    <div
                                                        class="card profile-project-card shadow-none profile-project-warning mb-0">
                                                        <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate mb-1">
                                                                        <a href="#" class="text-body">Chat
                                                                            App</a>
                                                                    </h5>
                                                                    <p class="text-muted text-truncate mb-0">
                                                                        Last Update : <span class="fw-semibold text-dark">1
                                                                            hr Ago</span></p>
                                                                </div>
                                                                <div class="flex-shrink-0 ms-2">
                                                                    <div class="badge bg-warning-subtle text-warning fs-10">
                                                                        Inprogress</div>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex mt-4">
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <h5 class="fs-12 text-muted mb-0">
                                                                                Members :</h5>
                                                                        </div>
                                                                        <div class="avatar-group">
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg"
                                                                                        alt=""
                                                                                        class="rounded-circle img-fluid" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-group-item">
                                                                                <div class="avatar-xs">
                                                                                    <div
                                                                                        class="avatar-title rounded-circle bg-light text-primary">
                                                                                        A
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end slide item -->
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div><!-- end card -->

                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="tab-pane fade" id="activities" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Activities</h5>
                                <div class="acitivity-timeline">
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-1.jpg" alt=""
                                                class="avatar-xs rounded-circle acitivity-avatar" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Oliver Phillips <span
                                                    class="badge bg-primary-subtle text-primary align-middle">New</span>
                                            </h6>
                                            <p class="text-muted mb-2">We talked about a project on
                                                linkedin.</p>
                                            <small class="mb-0 text-muted">Today</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                            <div class="avatar-title bg-success-subtle text-success rounded-circle">
                                                N
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Nancy Martino <span
                                                    class="badge bg-secondary-subtle text-secondary align-middle">In
                                                    Progress</span></h6>
                                            <p class="text-muted mb-2"><i class="ri-file-text-line align-middle ms-2"></i>
                                                Create new project Buildng product</p>
                                            <div class="avatar-group mb-2">
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Christi">
                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-xs" />
                                                </a>
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Frank Hook">
                                                    <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-xs" />
                                                </a>
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title=" Ruby">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            R
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="more">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle">
                                                            2+
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <small class="mb-0 text-muted">Yesterday</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg" alt=""
                                                class="avatar-xs rounded-circle acitivity-avatar" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Natasha Carey <span
                                                    class="badge bg-success-subtle text-success align-middle">Completed</span>
                                            </h6>
                                            <p class="text-muted mb-2">Adding a new event with
                                                attachments</p>
                                            <div class="row">
                                                <div class="col-xxl-4">
                                                    <div class="row border border-dashed gx-2 p-2 mb-2">
                                                        <div class="col-4">
                                                            <img src="http://127.0.0.1:8000/build/images/small/img-2.jpg" alt=""
                                                                class="img-fluid rounded" />
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-4">
                                                            <img src="http://127.0.0.1:8000/build/images/small/img-3.jpg" alt=""
                                                                class="img-fluid rounded" />
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-4">
                                                            <img src="http://127.0.0.1:8000/build/images/small/img-4.jpg" alt=""
                                                                class="img-fluid rounded" />
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <small class="mb-0 text-muted">25 Nov</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-6.jpg" alt=""
                                                class="avatar-xs rounded-circle acitivity-avatar" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Bethany Johnson</h6>
                                            <p class="text-muted mb-2">added a new member to velzon
                                                dashboard</p>
                                            <small class="mb-0 text-muted">19 Nov</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                    <i class="ri-shopping-bag-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Your order is placed <span
                                                    class="badge bg-danger-subtle text-danger align-middle ms-1">Out
                                                    of Delivery</span></h6>
                                            <p class="text-muted mb-2">These customers can rest assured
                                                their order has been placed.</p>
                                            <small class="mb-0 text-muted">16 Nov</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg" alt=""
                                                class="avatar-xs rounded-circle acitivity-avatar" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Lewis Pratt</h6>
                                            <p class="text-muted mb-2">They all have something to say
                                                beyond the words on the page. They can come across as
                                                casual or neutral, exotic or graphic. </p>
                                            <small class="mb-0 text-muted">22 Oct</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-info-subtle text-info">
                                                    <i class="ri-line-chart-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Monthly sales report</h6>
                                            <p class="text-muted mb-2"><span class="text-danger">2 days
                                                    left</span> notification to submit the monthly sales
                                                report. <a href="javascript:void(0);"
                                                    class="link-warning text-decoration-underline">Reports
                                                    Builder</a></p>
                                            <small class="mb-0 text-muted">15 Oct</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://127.0.0.1:8000/build/images/users/avatar-8.jpg" alt=""
                                                class="avatar-xs rounded-circle acitivity-avatar" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">New ticket received <span
                                                    class="badge bg-success-subtle text-success align-middle">Completed</span>
                                            </h6>
                                            <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span>
                                                submitted a
                                                ticket.</p>
                                            <small class="mb-0 text-muted">26 Aug</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane fade" id="projects" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-warning">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Chat App Update</a>
                                                        </h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">2 year
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-warning-subtle text-warning fs-10">
                                                            Inprogress</div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-1.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                            J
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-success">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">ABC Project
                                                                Customization</a></h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">2 month
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-primary-subtle text-primary fs-10">
                                                            Progress</div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-8.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-6.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-primary">
                                                                            2+
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-info">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Client - Frank
                                                                Hook</a></h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">1 hr
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-info-subtle text-info fs-10">New
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                            M
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-primary">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Velzon Project</a>
                                                        </h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">11 hr
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-success-subtle text-success fs-10">
                                                            Completed</div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-danger">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Brand Logo Design</a>
                                                        </h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">10 min
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-info-subtle text-info fs-10">New
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-6.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                            E
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-primary">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Chat App</a></h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">8 hr
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-warning-subtle text-warning fs-10">
                                                            Inprogress</div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                            R
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-8.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-warning">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Project Update</a>
                                                        </h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">48 min
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-warning-subtle text-warning fs-10">
                                                            Inprogress</div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-6.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none profile-project-success">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Client - Jennifer</a>
                                                        </h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">30 min
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-primary-subtle text-primary fs-10">
                                                            Process</div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-1.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none mb-xxl-0   profile-project-info">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Bsuiness Template -
                                                                UI/UX design</a></h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">7 month
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-success-subtle text-success fs-10">
                                                            Completed</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-2.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-3.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-4.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-primary">
                                                                            2+
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div
                                            class="card profile-project-card shadow-none mb-xxl-0  profile-project-success">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Update Project</a>
                                                        </h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">1 month
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-info-subtle text-info fs-10">New
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg" alt=""
                                                                            class="rounded-circle img-fluid">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-light text-primary">
                                                                            A
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none mb-sm-0  profile-project-danger">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">Bank Management
                                                                System</a></h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">10 month
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-success-subtle text-success fs-10">
                                                            Completed</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-6.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-5.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <div
                                                                            class="avatar-title rounded-circle bg-primary">
                                                                            2+
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-6">
                                        <div class="card profile-project-card shadow-none mb-0  profile-project-primary">
                                            <div class="card-body p-4">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                        <h5 class="fs-14 text-truncate"><a href="#"
                                                                class="text-body">PSD to HTML
                                                                Convert</a></h5>
                                                        <p class="text-muted text-truncate mb-0">Last
                                                            Update : <span class="fw-semibold text-body">29 min
                                                                Ago</span></p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="badge bg-info-subtle text-info fs-10">New
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-4">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <h5 class="fs-12 text-muted mb-0">
                                                                    Members :</h5>
                                                            </div>
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <div class="avatar-xs">
                                                                        <img src="http://127.0.0.1:8000/build/images/users/avatar-7.jpg" alt=""
                                                                            class="rounded-circle img-fluid" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mt-4">
                                            <ul class="pagination pagination-separated justify-content-center mb-0">
                                                <li class="page-item disabled">
                                                    <a href="javascript:void(0);" class="page-link"><i
                                                            class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="javascript:void(0);" class="page-link">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0);" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0);" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0);" class="page-link">4</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0);" class="page-link">5</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="javascript:void(0);" class="page-link"><i
                                                            class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane fade" id="documents" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                    <div class="flex-shrink-0">
                                        <input class="form-control d-none" type="file" id="formFile">
                                        <label for="formFile" class="btn btn-danger"><i
                                                class="ri-upload-2-fill me-1 align-bottom"></i> Upload
                                            File</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-borderless align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">File Name</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Size</th>
                                                        <th scope="col">Upload Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                                                                        <i class="ri-file-zip-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a
                                                                            href="javascript:void(0)"
                                                                            class="text-body">Artboard-documents.zip</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Zip File</td>
                                                        <td>4.57 MB</td>
                                                        <td>12 Dec 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon" id="dropdownMenuLink15"
                                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink15">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                        <i class="ri-file-pdf-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a
                                                                            href="javascript:void(0);"
                                                                            class="text-body">Bank
                                                                            Management System</a></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>PDF File</td>
                                                        <td>8.89 MB</td>
                                                        <td>24 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon" id="dropdownMenuLink3"
                                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink3">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-secondary-subtle text-secondary rounded fs-20">
                                                                        <i class="ri-video-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a
                                                                            href="javascript:void(0);"
                                                                            class="text-body">Tour-video.mp4</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>MP4 File</td>
                                                        <td>14.62 MB</td>
                                                        <td>19 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon" id="dropdownMenuLink4"
                                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink4">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-success-subtle text-success rounded fs-20">
                                                                        <i class="ri-file-excel-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a
                                                                            href="javascript:void(0);"
                                                                            class="text-body">Account-statement.xsl</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>XSL File</td>
                                                        <td>2.38 KB</td>
                                                        <td>14 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon" id="dropdownMenuLink5"
                                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink5">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                    </li>
                                                                    <li class="dropdown-divider"></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-info-subtle text-info rounded fs-20">
                                                                        <i class="ri-folder-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a
                                                                            href="javascript:void(0);"
                                                                            class="text-body">Project
                                                                            Screenshots Collection</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>Floder File</td>
                                                        <td>87.24 MB</td>
                                                        <td>08 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon" id="dropdownMenuLink6"
                                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink6">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                        <i class="ri-image-2-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-3 flex-grow-1">
                                                                    <h6 class="fs-14 mb-0"><a
                                                                            href="javascript:void(0);"
                                                                            class="text-body">Velzon-logo.png</a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>PNG File</td>
                                                        <td>879 KB</td>
                                                        <td>02 Nov 2021</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-light btn-icon" id="dropdownMenuLink7"
                                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                                    <i class="ri-equalizer-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end"
                                                                    aria-labelledby="dropdownMenuLink7">
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="javascript:void(0);"><i
                                                                                class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="javascript:void(0);" class="text-success "><i
                                                    class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i>
                                                Load more </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                </div>
                <!--end tab-content-->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Velzon.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<div class="customizer-setting d-none d-md-block">
    <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
        data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
        <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
    </div>
</div>

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
        <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

        <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="p-4">
                <h6 class="mb-0 fw-bold text-uppercase">Layout</h6>
                <p class="text-muted">Choose your layout</p>

                <div class="row gy-3">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                class="form-check-input">
                            <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                <span class="d-flex gap-1 h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Vertical</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal"
                                class="form-check-input">
                            <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                <span class="d-flex h-100 flex-column gap-1">
                                    <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                        <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                        <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                        <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                    </span>
                                    <span class="bg-light d-block p-1"></span>
                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn"
                                class="form-check-input">
                            <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                <span class="d-flex gap-1 h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 flex-column gap-1">
                                            <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Two Column</h5>
                    </div>
                    <!-- end col -->

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout04" name="data-layout" type="radio" value="semibox"
                                class="form-check-input">
                            <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout04">
                                <span class="d-flex gap-1 h-100">
                                    <span class="flex-shrink-0 p-1">
                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column pt-1 pe-2">
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Semi Box</h5>
                    </div>
                    <!-- end col -->
                </div>

                <h6 class="mt-4 mb-0 fw-bold text-uppercase">Color Scheme</h6>
                <p class="text-muted">Choose Light or Dark Scheme.</p>

                <div class="colorscheme-cardradio">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme"
                                    id="layout-mode-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check card-radio dark">
                                <input class="form-check-input" type="radio" name="data-bs-theme"
                                    id="layout-mode-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-white bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                                                <span
                                                    class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-white bg-opacity-10 d-block p-1"></span>
                                                <span class="bg-white bg-opacity-10 d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-visibility">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Visibility</h6>
                    <p class="text-muted">Choose show or Hidden sidebar.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                                    id="sidebar-visibility-show" value="show">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-visibility-show">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0 p-1">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Show</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-visibility"
                                    id="sidebar-visibility-hidden" value="hidden">
                                <label class="form-check-label p-0 avatar-md w-100 px-2"
                                    for="sidebar-visibility-hidden">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column pt-1 px-2">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Hidden</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-width">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Layout Width</h6>
                    <p class="text-muted">Choose Fluid or Boxed layout.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width"
                                    id="layout-width-fluid" value="fluid">
                                <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Fluid</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width"
                                    id="layout-width-boxed" value="boxed">
                                <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                    <span class="d-flex gap-1 h-100 border-start border-end">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Boxed</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-position">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Layout Position</h6>
                    <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-fixed" value="fixed">
                        <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
                <h6 class="mt-4 mb-0 fw-bold text-uppercase">Topbar Color</h6>
                <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar"
                                id="topbar-color-light" value="light">
                            <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                <span class="d-flex gap-1 h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Light</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark"
                                value="dark">
                            <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                <span class="d-flex gap-1 h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                            <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-primary d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Dark</h5>
                    </div>
                </div>

                <div id="sidebar-size">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Size</h6>
                    <p class="text-muted">Choose a size of Sidebar.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-default" value="lg">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span
                                                    class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-compact" value="md">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-small" value="sm">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size"
                                    id="sidebar-size-small-hover" value="sm-hover">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-view">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar View</h6>
                    <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-style"
                                    id="sidebar-view-default" value="default">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Default</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-style"
                                    id="sidebar-view-detached" value="detached">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                            <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                        </span>
                                        <span class="d-flex gap-1 h-100 p-1 px-2">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Detached</h5>
                        </div>
                    </div>
                </div>
                <div id="sidebar-color">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Color</h6>
                    <p class="text-muted">Choose a color of Sidebar.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                data-bs-target="#collapseBgGradient.show">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                data-bs-target="#collapseBgGradient.show">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-light-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient"
                                aria-expanded="false" aria-controls="collapseBgGradient">
                                <span class="d-flex gap-1 h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                            <span class="d-block p-1 px-2 bg-light-subtle rounded mb-2"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-light-subtle"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </span>
                                </span>
                            </button>
                            <h5 class="fs-13 text-center mt-2">Gradient</h5>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="collapse" id="collapseBgGradient">
                        <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient" value="gradient">
                                <label class="form-check-label p-0 avatar-xs rounded-circle"
                                    for="sidebar-color-gradient">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient-2" value="gradient-2">
                                <label class="form-check-label p-0 avatar-xs rounded-circle"
                                    for="sidebar-color-gradient-2">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient-3" value="gradient-3">
                                <label class="form-check-label p-0 avatar-xs rounded-circle"
                                    for="sidebar-color-gradient-3">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar"
                                    id="sidebar-color-gradient-4" value="gradient-4">
                                <label class="form-check-label p-0 avatar-xs rounded-circle"
                                    for="sidebar-color-gradient-4">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sidebar-img">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Sidebar Images</h6>
                    <p class="text-muted">Choose a image of Sidebar.</p>

                    <div class="d-flex gap-2 flex-wrap img-switch">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-none" value="none">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                <span
                                    class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                    <i class="ri-close-fill fs-20"></i>
                                </span>
                            </label>
                        </div>

                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-01" value="img-1">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                <img src="http://127.0.0.1:8000/build/images/sidebar/img-1.jpg"
                                    class="avatar-md w-auto object-fit-cover">
                            </label>
                        </div>

                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-02" value="img-2">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                <img src="http://127.0.0.1:8000/build/images/sidebar/img-2.jpg"
                                    class="avatar-md w-auto object-fit-cover">
                            </label>
                        </div>
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-03" value="img-3">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                <img src="http://127.0.0.1:8000/build/images/sidebar/img-3.jpg"
                                    class="avatar-md w-auto object-fit-cover">
                            </label>
                        </div>
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image"
                                id="sidebarimg-04" value="img-4">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                <img src="http://127.0.0.1:8000/build/images/sidebar/img-4.jpg"
                                    class="avatar-md w-auto object-fit-cover">
                            </label>
                        </div>
                    </div>
                </div>
                <div id="preloader-menu">
                    <h6 class="mt-4 mb-0 fw-bold text-uppercase">Preloader</h6>
                    <p class="text-muted">Choose a preloader.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-preloader"
                                    id="preloader-view-custom" value="enable">
                                <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                    <!-- <div id="preloader"> -->
                                    <div id="status" class="d-flex align-items-center justify-content-center">
                                        <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Enable</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-preloader"
                                    id="preloader-view-none" value="disable">
                                <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Disable</h5>
                        </div>
                    </div>

                </div>
                <!-- end preloader-menu -->

            </div>
        </div>

    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
            <div class="col-6">
                <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy
                    Now</a>
            </div>
        </div>
    </div>
</div>

    <!-- JAVASCRIPT -->
    <script src="http://127.0.0.1:8000/build/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://127.0.0.1:8000/build/libs/simplebar/simplebar.min.js"></script>
<script src="http://127.0.0.1:8000/build/libs/node-waves/waves.min.js"></script>
<script src="http://127.0.0.1:8000/build/libs/feather-icons/feather.min.js"></script>
<script src="http://127.0.0.1:8000/build/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="http://127.0.0.1:8000/build/js/plugins.js"></script>
    <script src="http://127.0.0.1:8000/build/libs/swiper/swiper-bundle.min.js"></script>

    <script src="http://127.0.0.1:8000/build/js/pages/profile.init.js"></script>
    <script src="http://127.0.0.1:8000/build/js/app.js"></script>
</body>

</html>
