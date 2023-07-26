<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('backoffice/images/favicon.ico') }}" />
    <link href="{{ asset('backoffice/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('backoffice/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backoffice/css/tailwind.css') }}" />
</head>

<body data-mode="dark" data-sidebar-size="lg">

    <nav
        class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">

        <div class="flex items-center justify-between w-full">
            <div class="topbar-brand flex items-center">
                <div
                    class="navbar-brand  flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                    <a href="#" class="flex items-center font-bold text-lg  dark:text-white">
                        <img src="{{ asset('backoffice/images/logo-sm.svg') }}" alt=""
                            class="mr-2 inline-block mt-1 h-6" />
                        <span class="hidden xl:block">Minia</span>
                    </a>
                </div>
                <button type="button" class="text-gray-600 dark:text-white h-[70px] -ml-10 mr-6 vertical-menu-btn"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <form class="app-search hidden xl:block px-5">
                    <div class="relative inline-block">
                        <input type="text"
                            class="bg-gray-50/30 dark:bg-zinc-700/50 border-0 rounded focus:ring-0 placeholder:text-sm px-4 dark:placeholder:text-gray-200 dark:text-gray-100 dark:border-zinc-700 "
                            placeholder="Search...">
                        <button
                            class="py-1.5 px-2.5 text-white bg-violet-500 inline-block absolute right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900"
                            type="button"><i class="bx bx-search-alt align-middle"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex items-center">

                <div>
                    <div class="dropdown relative sm:hidden block">
                        <button type="button"
                            class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle"
                            data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="h-5 w-5"></i>
                        </button>

                        <div class="dropdown-menu absolute px-4 -left-36 top-0 mx-4 w-72 z-50 hidden list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300"
                            id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="form-group m-0">
                                    <div class="flex w-full">
                                        <input type="text"
                                            class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit"
                                            placeholder="Search ..." aria-label="Search Result">
                                        <button
                                            class="btn btn-primary border-l-0 rounded-l-none bg-violet-500 border-transparent text-white"
                                            type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="dropdown relative language hidden sm:block">
                    <button class="btn border-0 py-0 dropdown-toggle px-4 h-[70px]" type="button" aria-expanded="false"
                        data-dropdown-toggle="navNotifications">
                        <img src="{{ asset('backoffice/images/flags/us.jpg') }}" alt="" class="h-4"
                            id="header-lang-img">
                    </button>
                    <div class="dropdown-menu absolute -left-24 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800"
                        id="navNotifications">
                        <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                        src="{{ asset('backoffice/images/flags/us.jpg') }}" alt="user-image"
                                        class="mr-1 inline-block h-3">
                                    <span class="align-middle">English</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                        src="{{ asset('backoffice/images/flags/spain.jpg') }}" alt="user-image"
                                        class="mr-1 inline-block h-3"> <span class="align-middle">Spanish</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                        src="{{ asset('backoffice/images/flags/germany.jpg') }}" alt="user-image"
                                        class="mr-1 inline-block h-3"> <span class="align-middle">German</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img
                                        src="{{ asset('backoffice/images/flags/italy.jpg') }}" alt="user-image"
                                        class="mr-1 inline-block h-3"> <span class="align-middle">Italian</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <button type="button"
                        class="light-dark-mode text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                        <i data-feather="moon" class="h-5 w-5 block dark:hidden"></i>
                        <i data-feather="sun" class="h-5 w-5 hidden dark:block"></i>
                </div>

                <div>
                    <div class="dropdown relative text-gray-600 hidden sm:block">
                        <button type="button"
                            class="btn border-0 h-[70px] text-xl px-4 dropdown-toggle dark:text-gray-100"
                            data-bs-toggle="dropdown" id="dropdownMenuButton1">
                            <i data-feather="grid" class="h-5 w-5"></i>
                        </button>
                        <div class="dropdown-menu absolute -left-40 z-50 hidden w-72 list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300"
                            aria-labelledby="dropdownMenuButton1">
                            <div class="p-2">
                                <div class="grid grid-cols-3">
                                    <a class="dropdown-item hover:bg-gray-50/50/30 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                        href="#">
                                        <img src="{{ asset('backoffice/images/brands/github.png') }}"
                                            class="mb-2 mx-auto h-6" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50/30 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                        href="#">
                                        <img src="{{ asset('backoffice/images/brands/bitbucket.png') }}"
                                            class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Bitbucket</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50/30 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                        href="#">
                                        <img src="{{ asset('backoffice/images/brands/dribbble.png') }}"
                                            class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                                <div class="grid grid-cols-3">
                                    <a class="dropdown-item hover:bg-gray-50/50/30 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                        href="#">
                                        <img src="{{ asset('backoffice/images/brands/dropbox.png') }}"
                                            class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Dropbox</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50/30 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                        href="#">
                                        <img src="{{ asset('backoffice/images/brands/mail_chimp.png') }}"
                                            class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Mail Chimp</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50/30 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50"
                                        href="#">
                                        <img src="{{ asset('backoffice/images/brands/slack.png') }}"
                                            class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Slack</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="dropdown relative ">
                        <div class="relative">
                            <button type="button"
                                class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-100"
                                aria-expanded="false" data-dropdown-toggle="notification">
                                <i data-feather="bell" class="h-5 w-5"></i>
                            </button>
                            <span
                                class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-2.5">5</span>
                        </div>
                        <div class="dropdown-menu absolute z-50 hidden w-80 list-none rounded bg-white shadow dark:bg-zinc-800 "
                            id="notification">
                            <div class="border border-gray-50 dark:border-gray-700 rounded"
                                aria-labelledby="notification">
                                <div class="grid grid-cols-12 p-4">
                                    <div class="col-span-6">
                                        <h6 class="m-0 text-gray-700 dark:text-gray-100"> Notifications </h6>
                                    </div>
                                    <div class="col-span-6 justify-self-end">
                                        <a href="#!" class="text-xs underline dark:text-gray-400"> Unread (3)</a>
                                    </div>
                                </div>
                                <div class="max-h-56" data-simplebar>
                                    <div>
                                        <a href="#!" class="text-reset notification-item">
                                            <div
                                                class="flex px-4 py-2 hover:bg-gray-50/50/30 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 mr-3">
                                                    <img src="{{ asset('backoffice/images/users/avatar-3.jpg') }}"
                                                        class="rounded-full h-8 w-8" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">James Lemire</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">It will seem like simplified
                                                            English.</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div
                                                class="flex px-4 py-2 hover:bg-gray-50/50/30 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 mr-3">
                                                    <div class="h-8 w-8 bg-violet-500 rounded-full text-center">
                                                        <i class="bx bx-cart text-xl leading-relaxed text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your order is
                                                        placed</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">If several languages
                                                            coalesce the grammar</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>3 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div
                                                class="flex px-4 py-2 hover:bg-gray-50/50/30 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 mr-3">
                                                    <div class="h-8 w-8 bg-green-500 rounded-full text-center">
                                                        <i
                                                            class="bx bx-badge-check text-xl leading-relaxed text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your item is
                                                        shipped</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">If several languages
                                                            coalesce the grammar</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>3 min ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div
                                                class="flex px-4 py-2 hover:bg-gray-50/50/30 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 mr-3">
                                                    <img src="{{ asset('backoffice/images/users/avatar-6.jpg') }}"
                                                        class="rounded-full h-8 w-8" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Salena Layfield
                                                    </h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">As a skeptical Cambridge
                                                            friend of mine occidental.</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-clock-outline dark:text-gray-400"></i>
                                                            <span>1 hour ago</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="p-1 border-t grid border-gray-50 dark:border-zinc-600 justify-items-center">
                                    <a class="btn border-0 text-violet-500" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="dropdown relative mr-4">
                        <button type="button"
                            class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            <img class="h-8 w-8 rounded-full xl:mr-2"
                                src="{{ asset('backoffice/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                            <span class="fw-medium hidden xl:block">Shawn L.</span>
                            <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                        </button>
                        <div class="dropdown-menu absolute top-0 -left-3 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800"
                            id="profile/log">
                            <div class="border border-gray-50 dark:border-zinc-600"
                                aria-labelledby="navNotifications">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="px-3 py-2 hover:bg-gray-50/50/30 block dark:hover:bg-zinc-700/50"
                                        href="apps-contacts-profile.html">
                                        <i class="mdi mdi-face-man text-16 align-middle mr-1"></i> Profile
                                    </a>
                                </div>
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="px-3 py-2 hover:bg-gray-50/50/30 block dark:hover:bg-zinc-700/50"
                                        href="lock-screen.html">
                                        <i class="mdi mdi-lock text-16 align-middle mr-1"></i> Lock Screen
                                    </a>
                                </div>
                                <hr class="border-gray-100 dark:border-gray-700">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="p-3 hover:bg-gray-50/50/30 block dark:hover:bg-zinc-700/50"
                                        href="logout.html">
                                        <i class="mdi mdi-logout text-16 align-middle mr-1"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hidden">
        <div class="fixed inset-0 bg-black/40 transition-opacity z-40"></div>
        <div class="h-screen z-50 bg-white fixed w-80 right-0" data-simplebar>
            <div class="flex items-center p-4 border-b border-gray-100">
                <h5 class="m-0 mr-2">Theme Customizer</h5>
                <a href="javascript:void(0);" class="h-6 w-6 text-center bg-gray-700 ml-auto rounded-full">
                    <i class="mdi mdi-close text-15 align-middle text-white leading-relaxed"></i>
                </a>
            </div>
            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout" id="layout-vertical"
                            value="vertical">
                        <label class="align-middle" for="layout-vertical">Vertical</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal"
                            value="horizontal">
                        <label class="align-middle" for="layout-horizontal">Horizontal</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-mode" id="layout-mode-light"
                            value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark"
                            value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild"
                            onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed"
                            value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed"
                            onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable"
                            onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="topbar-color"
                            id="topbar-color-light" value="light"
                            onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark"
                            value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default"
                            onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact"
                            value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small"
                            value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light"
                            onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark"
                            value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand"
                            value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>
                <div class="space-y-1">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl"
                            value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========== Left Sidebar Start ========== -->
    <div
        class="vertical-menu fixed left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default"
                        data-key="t-menu">Menu</li>

                    <li>
                        <a href="index.html"
                            class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard"> Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="grid"></i>
                            <span data-key="t-apps"> Apps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="app-calendar.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                            </li>
                            <li>
                                <a href="app-chat.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Email</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-email-inbox.html"
                                            class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html"
                                            class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read
                                            Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Invoices</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-invoices-list.html"
                                            class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-invoices-detail.html"
                                            class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice
                                            Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Contacts</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-contacts-grid.html"
                                            class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-list.html"
                                            class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-profile.html"
                                            class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false"
                                    class="flex items-center justify-between pl-14 pr-4 py-2  text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Blog</span>
                                    <span
                                        class="badge px-2 py-0.5 bg-red-100 text-xs rounded-full font-medium text-red-400 text-end">New</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-blog-grid.html"
                                            class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-list.html"
                                            class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            List</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-detail.html"
                                            class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog
                                            Details</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="users"></i>
                            <span data-key="t-auth">Authentication</span>
                        </a>
                        <ul>
                            <li>
                                <a href="login.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                            </li>
                            <li>
                                <a href="register.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Register</a>
                            </li>
                            <li>
                                <a href="recoverpw.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Recover
                                    Password</a>
                            </li>
                            <li>
                                <a href="lock-screen.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lock
                                    Screen</a>
                            </li>
                            <li>
                                <a href="logout.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Log
                                    Out</a>
                            </li>
                            <li>
                                <a href="confirm-mail.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Confirm
                                    Mail</a>
                            </li>
                            <li>
                                <a href="email-verification.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Email
                                    Verification</a>
                            </li>
                            <li>
                                <a href="two-step-verification.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Two
                                    Step Verification</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase"></i><span data-key="t-pages">Pages</span>
                        </a>
                        <ul>
                            <li>
                                <a href="starter.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter
                                    Page</a>
                            </li>
                            <li>
                                <a href="maintenance.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Maintenance</a>
                            </li>
                            <li>
                                <a href="coming-soon.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Coming
                                    Soon</a>
                            </li>
                            <li>
                                <a href="timeline.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Timeline</a>
                            </li>
                            <li>
                                <a href="faqs.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">FAQs</a>
                            </li>
                            <li>
                                <a href="pricing.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Pricing</a>
                            </li>
                            <li>
                                <a href="404.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error
                                    404</a>
                            </li>
                            <li>
                                <a href="500.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error
                                    500</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-heading px-4 py-3 text-xs font-medium text-gray-500 cursor-default"
                        data-key="t-elements">Elements</li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase"></i>
                            <span data-key="t-compo">Components</span>
                        </a>
                        <ul>
                            <li>
                                <a href="alerts.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Alerts</a>
                            </li>
                            <li>
                                <a href="buttons.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Buttons</a>
                            </li>
                            <li>
                                <a href="cards.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Cards</a>
                            </li>
                            <li>
                                <a href="dropdown.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dropdown</a>
                            </li>
                            <li>
                                <a href="flexbox%26grid.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Flexbox
                                    & Grid</a>
                            </li>
                            <li>
                                <a href="sizing.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sizing</a>
                            </li>
                            <li>
                                <a href="avatars.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Avatar</a>
                            </li>
                            <li>
                                <a href="modals.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Modals</a>
                            </li>
                            <li>
                                <a href="progress.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Progress</a>
                            </li>
                            <li>
                                <a href="tabs%26accordions.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Tabs
                                    & Accordions</a>
                            </li>
                            <li>
                                <a href="typography.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Typography</a>
                            </li>
                            <li>
                                <a href="toasts.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Toasts</a>
                            </li>
                            <li>
                                <a href="general.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">General</a>
                            </li>
                            <li>
                                <a href="colors.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Colors</a>
                            </li>
                            <li>
                                <a href="utilities.html"
                                    class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Utilities</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="gift"></i>
                            <span data-key="t-extend">Extended</span>
                        </a>
                        <ul>
                            <li>
                                <a href="extended-lightbox.html"
                                    class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lightbox</a>
                            </li>
                            <li>
                                <a href="extended-rangeslider.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                            </li>
                            <li>
                                <a href="extended-sweet-alert.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert
                                    2</a>
                            </li>
                            <li>
                                <a href="extended-rating.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rating</a>
                            </li>
                            <li>
                                <a href="extended-notifications.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Notifications</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <span
                                class="badge bg-red-50 text-danger float-right z-50 px-1.5 rounded-full text-11 text-red-500"
                                data-toggle="collapse">7</span>
                            <i data-feather="box"></i>
                            <span data-key="t-forms">Forms</span>
                        </a>
                        <ul>
                            <li>
                                <a href="form-elements.html"
                                    class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic
                                    Elements</a>
                            </li>
                            <li>
                                <a href="form-validation.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                            </li>
                            <li>
                                <a href="form-advanced.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert
                                    2</a>
                            </li>
                            <li>
                                <a href="form-editors.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editors</a>
                            </li>
                            <li>
                                <a href="file-uploads.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">File
                                    Upload</a>
                            </li>
                            <li>
                                <a href="form-wizard.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Wizard</a>
                            </li>
                            <li>
                                <a href="form-mask.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Mask</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="sliders"></i>
                            <span data-key="t-charts">Tables</span>
                        </a>
                        <ul>
                            <li>
                                <a href="tables-basic.html"
                                    class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic
                                    Elements</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">DataTables</a>
                            </li>
                            <li>
                                <a href="tables-responsive.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Responsive</a>
                            </li>
                            <li>
                                <a href="tables-editable.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editable
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="pie-chart"></i>
                            <span data-key="t-charts">Charts</span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts-apex.html"
                                    class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Apexcharts</a>
                            </li>
                            <li>
                                <a href="charts-echart.html"
                                    class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Echarts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chartjs</a>
                            </li>
                            <li>
                                <a href="charts-knob.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Jquery
                                    Knob</a>
                            </li>
                            <li>
                                <a href="charts-sparkline.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sparkline
                                    Chart</a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="cpu"></i>
                            <span data-key="t-icons">Icons</span>
                        </a>
                        <ul>
                            <li>
                                <a href="icons-boxicons.html"
                                    class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Boxicons</a>
                            </li>
                            <li>
                                <a href="icons-materialdesign.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Material
                                    Design</a>
                            </li>
                            <li>
                                <a href="icons-dripicons.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dripicons</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="map"></i>
                            <span data-key="t-maps"> Maps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps-google.html"
                                    class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Google</a>
                            </li>
                            <li>
                                <a href="maps-vector.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Vector</a>
                            </li>
                            <li>
                                <a href="maps-leaflet.html"
                                    class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Leaflet</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu__item w-full ">
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="share-2"></i>
                            <span data-key="t-level">Multi Level</span>
                        </a>
                        <div>
                            <ul>
                                <li>
                                    <a href="index.html"
                                        class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level
                                        1.1</a>
                                </li>
                                <li>
                                    <a href="#!" data-toggle="collapse" data-target=".Level1.2-menu"
                                        class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                        <span data-key="t-level">Level 1.2</span>
                                    </a>
                                    <ul class="collapse Level1.2-menu">
                                        <li>
                                            <a href="#"
                                                class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level
                                                2.1</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level
                                                2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </li>

                </ul>

                <div class="sidebar-alert text-center mx-5 my-12">
                    <div class="card-body bg-primary rounded bg-violet-50/50 dark:bg-zinc-700/60">
                        <img src="{{ asset('backoffice/images/giftbox.png') }}" alt=""
                            class="block mx-auto">
                        <div class="mt-4">
                            <h5 class="text-violet-500 mb-3 font-medium">Unlimited Access</h5>
                            <p class="text-slate-600 text-13 dark:text-gray-50">Upgrade your plan from a Free trial, to
                                select ‘Business Plan’.</p>
                            <a href="#!" class="btn bg-violet-500 text-white border-transparent mt-6">Upgrade
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
    <div class="main-content ">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Dashboard</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#"
                                            class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">Dashboard</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid grid-cols-12 gap-5 items-center">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">My Wallet</span>
                                        <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                            $
                                            <span class="counter-value" data-target="865.2">865.2</span>
                                            k
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">+$20.9k</span>
                                <span class="ml-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid grid-cols-12 gap-5 items-center">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">Number of Trades</span>
                                        <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                            <span class="counter-value" data-target="865.2">6258</span>
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-red-50/60 text-red-500 rounded font-medium dark:bg-red-500/30">-29
                                    Trades</span>
                                <span class="ml-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                            </div>
                        </div>
                    </div>
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid grid-cols-12 gap-5 items-center">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">Invested Amount</span>
                                        <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                            $
                                            <span class="counter-value" data-target="865.2">4.32</span>
                                            M
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">+
                                    $2.8k</span>
                                <span class="ml-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                            </div>
                        </div>
                    </div>
                    <div class="card  dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body">
                            <div>
                                <div class="grid grid-cols-12 gap-5 items-center">
                                    <div class="col-span-6">
                                        <span class="text-gray-700 dark:text-zinc-100">Profit Ration</span>
                                        <h4 class="my-4 text-xl text-gray-800 dark:text-gray-100 ">
                                            <span class="counter-value" data-target="865.2">12.57%</span>
                                        </h4>
                                    </div>
                                    <div class="col-span-6">
                                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="text-xs py-[1px] px-1 bg-green-50/60 text-green-500 rounded font-medium dark:bg-green-500/30">+2.95%</span>
                                <span class="ml-1.5 text-gray-700 text-13 dark:text-zinc-100">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-12 gap-5">
                    <div class="col-span-12 xl:col-span-5">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                            <div class="card-body">
                                <div class="flex flex-wrap items-center mb-2">
                                    <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 ">Wallet Balance</h5>
                                    <div class="ml-auto flex gap-1">
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800 font-medium">ALL</button>
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-violet-50/50 border-transparent text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white dark:bg-violet-500/20 dark:text-violet-300 dark:hover:bg-violet-100 dark:hover:text-violet-500 font-medium">1M</button>
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800 font-medium">6M</button>
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-white focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-zinc-100 hover:bg-gray-500 dark:hover:bg-gray-200 dark:hover:text-gray-800 font-medium">1Y</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-5 justify-items-stretch">
                                    <div class="col-span-6 justify-self-center">
                                        <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]'
                                            class="apex-charts"></div>
                                    </div>
                                    <div class="col-span-6">
                                        <div class="mt-4 mt-sm-0">
                                            <div>
                                                <p class="mb-2 dark:text-zinc-100">
                                                    <i
                                                        class="mdi mdi-circle align-middle text-10 mr-2 text-green-500 "></i>
                                                    Bitcoin
                                                </p>
                                                <h6 class="text-gray-800 dark:text-gray-100">0.4412 BTC =
                                                    <span
                                                        class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$
                                                        4025.32</span>
                                                </h6>
                                            </div>
                                            <div class="mt-4 pt-2">
                                                <p class="mb-2 dark:text-zinc-100">
                                                    <i
                                                        class="mdi mdi-circle align-middle text-10 mr-2 text-violet-500 "></i>
                                                    Ethereum
                                                </p>
                                                <h6 class="text-gray-800 dark:text-gray-100">4.5701 ETH =
                                                    <span
                                                        class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$
                                                        1123.64</span>
                                                </h6>
                                            </div>
                                            <div class="mt-4 pt-2">
                                                <p class="mb-2 dark:text-zinc-100">
                                                    <i
                                                        class="mdi mdi-circle align-middle text-10 mr-2 text-sky-500"></i>
                                                    Litecoin
                                                </p>
                                                <h6 class="text-gray-800 dark:text-gray-100">35.3811 LTC =
                                                    <span
                                                        class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$
                                                        2263.09</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-7">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 lg:col-span-8">
                                <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                                    <div class="card-body">
                                        <div class="flex flex-wrap items-center mb-2">
                                            <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 ">Invested
                                                Overview</h5>
                                            <div class="ml-auto">
                                                <select
                                                    class="form-select form-select-sm py-0 pl-4 border-gray-50 bg-gray-50/20 dark:border-zinc-600 dark:text-gray-100 dark:bg-zinc-700">
                                                    <option value="MAY" selected="">May</option>
                                                    <option value="AP">April</option>
                                                    <option value="MA">March</option>
                                                    <option value="FE">February</option>
                                                    <option value="JA">January</option>
                                                    <option value="DE">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-6 justify-self-center">
                                                <div id="invested-overview" data-colors='["#5156be", "#34c38f"]'
                                                    class="apex-charts"></div>
                                            </div>
                                            <div class="col-span-6">
                                                <div class="mt-4 mt-sm-0">
                                                    <p class="text-gray-700 dark:text-zinc-100">Invested Amount</p>
                                                    <h4 class="text-21 text-gray-800 dark:text-gray-100 pb-2 pt-1">$
                                                        6134.39</h4>
                                                    <p class="text-gray-700 dark:text-zinc-100 mb-4"> + 0.0012.23 ( 0.2
                                                        % )
                                                        <i class="mdi mdi-arrow-up ml-1 text-green-500"></i>
                                                    </p>
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-1 text-gray-700 dark:text-zinc-100 text-uppercase font-size-11">
                                                                    Income</p>
                                                                <h5 class="text-gray-800 dark:text-gray-100">$ 2632.46
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <div>
                                                                <p
                                                                    class="mb-1 text-gray-700 dark:text-zinc-100 text-uppercase font-size-11">
                                                                    Expenses</p>
                                                                <h5 class="text-gray-800 dark:text-gray-100">-$ 924.38
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <a href="#"
                                                            class="btn py-1.5 px-2.5 text-xs bg-violet-500 text-white shadow-md shadow-violet-100 border-transparent hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">View
                                                            more
                                                            <i class="mdi mdi-arrow-right ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-12 lg:col-span-4">
                                <div
                                    class="card card-h-100 bg-violet-500 border-transparent shadow shadow-violet-100 dark:shadow-zinc-800 relative overflow-hidden">
                                    <div class="card-body text-center">
                                        <div class="absolute -top-2 -right-2">
                                            <i class="mdi mdi-bitcoin widget-box-1-icon text-7xl text-white/10"></i>
                                        </div>
                                        <div class="h-12 w-12 rounded-full bg-white/30 mx-auto text-center">
                                            <span class="text-white text-2xl">
                                                <i class="mdi mdi-currency-btc leading-loose"></i>
                                            </span>
                                        </div>
                                        <h4 class="mt-4 lh-base fw-normal text-white text-21">
                                            <span>Bitcoin</span>
                                            <span class="font-normal">News</span>
                                        </h4>
                                        <p class="text-white/50 text-13 mt-2 mb-4 ">
                                            Bitcoin prices fell sharply amid the global sell-off in equities. Negative
                                            news
                                            over the Bitcoin past week has dampened Bitcoin basics
                                            sentiment for bitcoin.
                                        </p>
                                        <button type="button" href="apps-invoices-list.html"
                                            class="btn py-1.5 px-2.5 text-xs border-transparent bg-white dark:bg-gray-800 dark:text-gray-100 shadow shadow-white/20">View
                                            details
                                            <i class="mdi mdi-arrow-right ml-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-8">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600 card-h-100">
                            <div class="card-body pb-0">
                                <div class="flex flex-wrap items-center mb-2">
                                    <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 ">Market Overview</h5>
                                    <div class="ml-auto flex gap-1">
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-violet-50/50 border-transparent text-violet-500 hover:bg-violet-500 hover:text-white focus:bg-violet-500 focus:text-white dark:bg-violet-500/20 dark:text-violet-200 dark:hover:bg-violet-500 dark:hover:text-white">ALL</button>
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-gray-500 focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">1M</button>
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-gray-500 focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">6M</button>
                                        <button type="button"
                                            class="btn py-1 px-2 text-13 bg-gray-50/50 border-transparent text-gray-500 hover:bg-gray-50/50 dark:hover:bg-zinc-600/800 hover:text-gray-500 focus:bg-gray-500 focus:text-white dark:bg-gray-500/10 dark:text-gray-100 dark:hover:bg-gray-500 dark:hover:text-white">1Y</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="grid grid-cols-12 gap-10 items-center">
                                    <div class="col-span-12 lg:col-span-8">
                                        <div id="market-overview" data-colors='["#5156be", "#34c38f"]'
                                            class="apex-charts dark:border-zinc-700"></div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="p-4 space-y-5">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-8 w-8 bg-slate-100 text-center rounded-full dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">1</span>
                                                </div>
                                                <div class="flex-grow ml-3">
                                                    <span
                                                        class="text-16 text-gray-700 dark:text-gray-100">Coinmarketcap</span>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span
                                                        class="text-xs bg-green-50/60 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+2.5%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="h-8 w-8 bg-slate-100 text-center rounded-full dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">2</span>
                                                </div>
                                                <div class="flex-grow ml-3">
                                                    <span
                                                        class="text-16 text-gray-700 dark:text-gray-100">Binance</span>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span
                                                        class="text-xs bg-green-50/60 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+8.3%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="h-8 w-8 bg-slate-100 text-center rounded-full dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">3</span>
                                                </div>
                                                <div class="flex-grow ml-3">
                                                    <span
                                                        class="text-16 text-gray-700 dark:text-gray-100">Coinbase</span>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span
                                                        class="text-xs bg-red-50/60 text-red-500 py-0.5 px-2 rounded-full font-medium dark:bg-red-500/20 ">-3.6%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="h-8 w-8 bg-slate-100 text-center rounded-full dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">4</span>
                                                </div>
                                                <div class="flex-grow ml-3">
                                                    <span class="text-16 text-gray-700 dark:text-gray-100">Yobit</span>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span
                                                        class="text-xs bg-green-50/60 text-green-500 py-0.5 px-2 rounded-full font-medium dark:bg-green-500/20 ">+7.1%</span>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div
                                                    class="h-8 w-8 bg-slate-100 text-center rounded-full dark:bg-zinc-700 dark:text-gray-100">
                                                    <span class="leading-loose text-16">5</span>
                                                </div>
                                                <div class="flex-grow ml-3">
                                                    <span
                                                        class="text-16 text-gray-700 dark:text-gray-100">Bitfinex</span>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span
                                                        class="text-xs bg-red-50/60 text-red-500 py-0.5 px-2 rounded-full font-medium dark:bg-red-500/20 ">-0.9%</span>
                                                </div>
                                            </div>

                                            <div class="mt-4 pt-2">
                                                <a href="#"
                                                    class="btn bg-violet-500 w-full border-transparent text-white font-medium shadow-md shadow-violet-100 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50/50 dark:shadow-zinc-600">See
                                                    All Balances <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600 w-full card-h-100">
                            <div class="card-body flex flex-wrap items-center pb-0">
                                <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 ">Sales by Locations</h5>
                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a class="btn p-0 border-0 dropdown-toggle cursor-pointer"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="text-gray-600 text-xs dark:text-gray-100">Sort By:</span>
                                            <span class="font-medium dark:text-gray-100">World<i
                                                    class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>

                                        <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left
                                            rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50"
                                                    href="#">Action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                bg-transparent text-gray-700 dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50"
                                                    href="#">Another action</a>
                                            </li>
                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                text-gray-700 dark:text-zinc-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80/50"
                                                    href="#">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales-by-locations" class="w-full" data-colors='["#5156be"]'
                                    style="height: 250px"></div>
                                <div class="px-2 py-2">
                                    <p class="mb-1 text-gray-700 dark:text-zinc-100">USA <span
                                            class="float-right">75%</span></p>
                                    <div class="bg-gray-50 rounded-full mt-2 dark:bg-zinc-700" style="height: 6px;">
                                        <div class="bg-violet-500 progress-bar-striped h-[6px] rounded-l overflow-hidden"
                                            role="progressbar" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="75">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1 dark:text-zinc-100">Russia <span
                                            class="float-right">55%</span></p>
                                    <div class="bg-gray-50 rounded-full mt-2 dark:bg-zinc-700" style="height: 6px;">
                                        <div class="bg-violet-500 progress-bar-striped h-[6px] rounded-l overflow-hidden"
                                            role="progressbar" style="width: 55%" aria-valuenow="55"
                                            aria-valuemin="0" aria-valuemax="55">
                                        </div>
                                    </div>

                                    <p class="mt-3 mb-1 dark:text-zinc-100">Australia <span
                                            class="float-right">85%</span></p>
                                    <div class="bg-gray-50 rounded-full mt-2 dark:bg-zinc-700" style="height: 6px;">
                                        <div class="bg-violet-500 progress-bar-striped h-[6px] rounded-l overflow-hidden"
                                            role="progressbar" style="width: 85%" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="85">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="nav-tabs border-b-tabs">
                            <div class="card-body pb-0 flex border-b border-gray-50 dark:border-zinc-700">
                                <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 flex-grow">Trading</h5>
                                <div class="flex-shrink-0">
                                    <ul class="nav flex" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium dark:text-gray-100 active"href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="buy-tab" role="tab">Buy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium dark:text-gray-100"
                                                href="javascript:void(0);" data-tw-toggle="tab"
                                                data-tw-target="sell-tab" role="tab">Sell</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane block" id="buy-tab" role="tabpanel">
                                        <div class="float-right ms-2">
                                            <h5 class="text-sm text-gray-700 dark:text-zinc-100"><i
                                                    class="bx bx-wallet text-violet-500 text-16 align-middle mr-1"></i>
                                                <a href="#!"
                                                    class="text-reset underline  underline-offset-2">$4335.23</a>
                                            </h5>
                                        </div>
                                        <h5 class="text-sm mb-4 text-gray-700 dark:text-gray-100 ">Buy Coins</h5>
                                        <div>
                                            <div class="form-group mb-3">
                                                <label
                                                    class="block mb-2 font-medium text-gray-700 dark:text-zinc-100">Payment
                                                    method :</label>
                                                <select
                                                    class="bg-gray-50/20 w-full border-gray-100 rounded selection:text-10 py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/50 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10">
                                                    <option>Direct Bank Payment</option>
                                                    <option>Credit / Debit Card</option>
                                                    <option>Paypal</option>
                                                    <option>Payoneer</option>
                                                    <option>Stripe</option>
                                                </select>
                                            </div>

                                            <div class="mt-4">
                                                <label class="block mb-2 font-medium dark:text-gray-100 ">Add Amount
                                                    :</label>
                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600  dark:text-zinc-100">
                                                    <label
                                                        class="px-3 py-2 border-r border-gray-100 bg-gray-50/20 dark:bg-zinc-700 dark:border-zinc-600">Amount</label>
                                                    <select
                                                        class="bg-gray-50/20 border-0 py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:focus:ring-gray-500/10"
                                                        style="max-width: 90px;">
                                                        <option value="BT" selected="">BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text"
                                                        class="bg-gray-50/20 border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:focus:ring-gray-500/10"
                                                        placeholder="0.00121255">
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600  dark:text-zinc-100">
                                                    <label
                                                        class="px-3 py-2 border-r border-gray-100 bg-gray-50/20 dark:bg-zinc-700 dark:border-zinc-600">Price</label>
                                                    <input type="text"
                                                        class="bg-gray-50/20 w-full py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:focus:ring-gray-500/10"
                                                        placeholder="$58,245">
                                                    <label
                                                        class="px-3 border-l py-2 border-gray-100 bg-gray-50/20 dark:bg-zinc-700 dark:border-zinc-600">$</label>
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600  dark:text-zinc-100">
                                                    <label
                                                        class="px-3 py-2 border-r border-gray-100 bg-gray-50/20 dark:bg-zinc-700 dark:border-zinc-600">Total</label>
                                                    <input type="text"
                                                        class="bg-gray-50/20 w-full py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:focus:ring-gray-500/10"
                                                        placeholder="$36,854.25">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button"
                                                    class="btn bg-green-500 px-6 border-transparent text-white shadow-md shadow-green-100 hover:bg-green-600 focus:bg-green-600 focus:ring focus:ring-green-50 dark:shadow-zinc-600">Buy
                                                    Coin</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane hidden" id="sell-tab" role="tabpanel">
                                        <div class="float-right ms-2">
                                            <h5 class="text-sm text-gray-700 dark:text-zinc-100"><i
                                                    class="bx bx-wallet text-violet-500 text-16 align-middle mr-1"></i>
                                                <a href="#!"
                                                    class="text-reset underline underline-offset-2">$4335.23</a>
                                            </h5>
                                        </div>
                                        <h5 class="text-sm mb-4 text-gray-700 dark:text-gray-100">Sell Coins</h5>

                                        <div>
                                            <div class="form-group mb-3">
                                                <label
                                                    class="block text-gray-700 dark:text-zinc-100 font-medium mb-2">Wallet
                                                    ID :</label>
                                                <input type="email"
                                                    class="w-full placeholder:text-sm py-1.5 border-gray-100 rounded bg-gray-50/20 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder:text-gray-200 dark:text-gray-100"
                                                    placeholder="1cvb254ugxvfcd280ki">
                                            </div>

                                            <div class="mt-4">
                                                <label class="block mb-2 font-medium dark:text-zinc-100">Add Amount
                                                    :</label>
                                                <div
                                                    class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600">
                                                    <label
                                                        class=" px-3 py-2 border-r border-gray-100 bg-gray-50/20 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100">Amount</label>
                                                    <select
                                                        class="bg-gray-50/20 border-0 py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100 dark:focus:ring-gray-500/10"
                                                        style="max-width: 90px;">
                                                        <option value="BT" selected="">BTC</option>
                                                        <option value="ET">ETH</option>
                                                        <option value="LT">LTC</option>
                                                    </select>
                                                    <input type="text"
                                                        class="bg-gray-50/20 border-0 w-full py-1.5 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10"
                                                        placeholder="0.00121255">
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 dark:border-zinc-600 rounded">
                                                    <label
                                                        class="px-3 py-2 border-r border-gray-100 dark:border-zinc-600 bg-gray-50/20 dark:bg-zinc-700 dark:text-gray-100">Price</label>
                                                    <input type="text"
                                                        class="w-full bg-gray-50/20 py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10"
                                                        placeholder="$58,245">
                                                    <label
                                                        class="px-3 border-l py-2 border-gray-100 dark:border-zinc-600 bg-gray-50/20 dark:bg-zinc-700 dark:text-gray-100">$</label>
                                                </div>

                                                <div
                                                    class="flex mb-3 border border-gray-100 dark:border-zinc-600 rounded">
                                                    <label
                                                        class="px-3 py-2 border-r border-gray-100 dark:border-zinc-600 bg-gray-50/20 dark:text-gray-100 dark:bg-zinc-700">Total</label>
                                                    <input type="text"
                                                        class="w-full bg-gray-50/20 py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 ark:border-zinc-600 dark:bg-zinc-700 dark:placeholder:text-gray-200"
                                                        placeholder="$36,854.25">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="button"
                                                    class="btn bg-red-500 px-6 border-transparent text-white shadow-md shadow-red-100 hover:bg-red-600 focus:bg-red-600 focus:ring focus:ring-red-50 dark:shadow-zinc-600">Sell
                                                    Coin</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="nav-tabs border-b-tabs">
                            <div class="card-body pb-0 flex border-b border-gray-50 dark:border-zinc-700">
                                <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100 flex-grow">Transactions</h5>
                                <div class="flex-shrink-0">
                                    <ul class="nav flex" role="tablist">
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium active "href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="all-tab1"
                                                role="tab">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="buy-tab1"
                                                role="tab">Sell</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                                data-tw-toggle="tab" data-tw-target="sell-tab1"
                                                role="tab">Buy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <div class="tab-content">
                                    <div class="tab-pane block" id="all-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-3" style="width: 50px;">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1  text-gray-700 dark:text-gray-100">
                                                                    Buy LTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    1.88 LTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $94.22</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.42 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $84.32</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.018 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $145.80</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane hidden" id="buy-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-3" style="width: 50px;">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.018 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $145.80</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1  text-gray-700 dark:text-gray-100">
                                                                    Buy LTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    1.88 LTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $94.22</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.42 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $84.32</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-green-500">
                                                                <i class="bx bx-down-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Buy BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane hidden" id="sell-tab1" role="tabpanel">
                                        <div class="px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table w-full">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-3" style="width: 50px;">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    18 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1  text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    16 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.018 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $145.80</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.56 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $112.34</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell LTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    17 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    1.88 LTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $94.22</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    15 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.42 ETH</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $84.32</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="text-22 text-red-500">
                                                                <i class="bx bx-up-arrow-circle d-block"></i>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div>
                                                                <h5
                                                                    class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                    Sell BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    14 Mar, 2021</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                    0.016 BTC</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Coin Value</p>
                                                            </div>
                                                        </td>

                                                        <td class="p-3">
                                                            <div class="text-end">
                                                                <h5
                                                                    class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                    $125.20</h5>
                                                                <p
                                                                    class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                    Amount</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <div class="flex flex-wrap items-center mb-2">
                                <h5 class="text-15 mr-2 text-gray-800 dark:text-gray-100">Recent Activity</h5>
                                <div class="ml-auto">
                                    <select
                                        class="form-select form-select-md rounded py-0.5 pl-3 border-gray-50 bg-gray-50/20 dark:border-zinc-600 dark:text-gray-100 dark:bg-zinc-700">
                                        <option value="Today" selected="">Today</option>
                                        <option value="Yesterday">Yesterday</option>
                                        <option value="Last Week">Last Week</option>
                                        <option value="Last Month">Last Month</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div class="px-3" data-simplebar style="max-height: 352px;">
                                <ul class="overflow-hidden">
                                    <li class="flex pl-12 pb-6 relative">
                                        <div class="absolute left-0 z-40">
                                            <div class="h-10 w-10 bg-yellow-50 rounded-full text-center">
                                                <i class="bx bx-bitcoin text-2xl leading-relaxed text-yellow-500"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex">
                                                <div class="grow mr-4 ml-2 overflow-hidden w-72">
                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                        24/05/2021, 18:24:56</h5>
                                                    <p
                                                        class="text-13 overflow-hidden text-ellipsis whitespace-nowrap text-gray-500 dark:text-zinc-100">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="shrink-0 text-end mr-1 w-20">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">+0.5 BTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$178.53</div>
                                                </div>

                                                <div class="shrink-0 text-end">
                                                    <div class="dropdown relative">
                                                        <a href="#!"
                                                            class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100
                                                             "
                                                            id="dropdownButton12" data-bs-toggle="dropdown"><i
                                                                class="mdi mdi-dots-vertical"></i></a>

                                                        <ul class=" dropdown-menu min-w-max absolute bg-white dark:bg-zinc-700 z-50 float-left py-2 list-none text-left
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                                            aria-labelledby="dropdownButton12">
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Something else here</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="after:contant-[] after:absolute after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-5 after:z-0 dark:border-zinc-600">
                                        </div>
                                    </li>

                                    <li class="flex pl-12 pb-6 relative">
                                        <div class="absolute left-0 z-40">
                                            <div class="h-10 w-10 bg-violet-50 rounded-full text-center">
                                                <i
                                                    class="mdi mdi-ethereum text-2xl leading-relaxed text-violet-500"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex">
                                                <div class="grow mr-4 ml-2 overflow-hidden w-72">
                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                        24/05/2021, 18:24:56</h5>
                                                    <p
                                                        class="text-13 overflow-hidden text-ellipsis whitespace-nowrap text-gray-500 dark:text-zinc-100">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="shrink-0 text-end mr-1 w-20">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">-20.5 ETH</h6>
                                                    <div class="text-13 dark:text-zinc-100">$3541.45</div>
                                                </div>

                                                <div class="shrink-0 text-end">
                                                    <div class="dropdown relative">
                                                        <a href="#!"
                                                            class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100
                                                             "
                                                            id="dropdownMenu16" data-bs-toggle="dropdown"><i
                                                                class="mdi mdi-dots-vertical"></i></a>

                                                        <ul class=" dropdown-menu min-w-max absolute bg-white dark:bg-zinc-700 z-50 float-left py-2 list-none text-left
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                                            aria-labelledby="dropdownMenu16">
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Something else here</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="after:contant-[] after:absolute after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-5 after:z-0 dark:border-zinc-600">
                                        </div>
                                    </li>

                                    <li class="flex pl-12 pb-6 relative">
                                        <div class="absolute left-0 z-40">
                                            <div class="h-10 w-10 bg-yellow-50 rounded-full text-center">
                                                <i class="bx bx-bitcoin text-2xl leading-relaxed text-yellow-500"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex">
                                                <div class="grow mr-4 ml-2 overflow-hidden w-72">
                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                        24/05/2021, 18:24:56</h5>
                                                    <p
                                                        class="text-13 overflow-hidden text-ellipsis whitespace-nowrap text-gray-500 dark:text-zinc-100">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="shrink-0 text-end mr-1 w-20">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">+0.5 BTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                                </div>

                                                <div class="shrink-0 text-end">
                                                    <div class="dropdown relative">
                                                        <a href="#!"
                                                            class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100
                                                             "
                                                            id="dropdownMenu14" data-bs-toggle="dropdown"><i
                                                                class="mdi mdi-dots-vertical"></i></a>

                                                        <ul class=" dropdown-menu min-w-max absolute bg-white dark:bg-zinc-700 z-50 float-left py-2 list-none text-left
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                                            aria-labelledby="dropdownMenu14">
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Something else here</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="after:contant-[] after:absolute after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-5 after:z-0 dark:border-zinc-600">
                                        </div>
                                    </li>

                                    <li class="flex pl-12 pb-6 relative">
                                        <div class="absolute left-0 z-40">
                                            <div class="h-10 w-10 bg-violet-50 rounded-full text-center">
                                                <i
                                                    class="mdi mdi-litecoin text-2xl leading-relaxed text-violet-500"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex">
                                                <div class="grow mr-4 ml-2 overflow-hidden w-72">
                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                        24/05/2021, 18:24:56</h5>
                                                    <p
                                                        class="text-13 overflow-hidden text-ellipsis whitespace-nowrap text-gray-500 dark:text-zinc-100">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="shrink-0 text-end mr-1 w-20">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">-1.5 LTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                                </div>

                                                <div class="shrink-0 text-end">
                                                    <div class="dropdown relative">
                                                        <a href="#!"
                                                            class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100
                                                             "
                                                            id="dropdownMenu13" data-bs-toggle="dropdown"><i
                                                                class="mdi mdi-dots-vertical"></i></a>

                                                        <ul class=" dropdown-menu min-w-max absolute bg-white dark:bg-zinc-700 z-50 float-left py-2 list-none text-left
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                                            aria-labelledby="dropdownMenu13">
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Something else here</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="after:contant-[] after:absolute after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-5 after:z-0 dark:border-zinc-600">
                                        </div>
                                    </li>

                                    <li class="flex pl-12 pb-6 relative">
                                        <div class="absolute left-0 z-40">
                                            <div class="h-10 w-10 bg-yellow-50 rounded-full text-center">
                                                <i class="bx bx-bitcoin text-2xl leading-relaxed text-yellow-500"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex">
                                                <div class="grow mr-4 ml-2 overflow-hidden w-72">
                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                        24/05/2021, 18:24:56</h5>
                                                    <p
                                                        class="text-13 overflow-hidden text-ellipsis whitespace-nowrap text-gray-500 dark:text-zinc-100">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="shrink-0 text-end mr-1 w-20">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">+0.5 BTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$5791.45</div>
                                                </div>

                                                <div class="shrink-0 text-end">
                                                    <div class="dropdown relative">
                                                        <a href="#!"
                                                            class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100
                                                             "
                                                            id="dropdownMenu12" data-bs-toggle="dropdown"><i
                                                                class="mdi mdi-dots-vertical"></i></a>

                                                        <ul class=" dropdown-menu min-w-max absolute bg-white dark:bg-zinc-700 z-50 float-left py-2 list-none text-left
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                                            aria-labelledby="dropdownMenu12">
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Something else here</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="after:contant-[] after:absolute after:h-20 after:border-l-2 after:border-dashed after:border-gray-100 after:left-5 after:z-0 dark:border-zinc-600">
                                        </div>
                                    </li>

                                    <li class="flex pl-12 relative">
                                        <div class="absolute left-0">
                                            <div class="h-10 w-10 bg-violet-500 rounded-full text-center"> </div>
                                        </div>
                                        <div>
                                            <div class="flex">
                                                <div class="grow mr-4 ml-2 overflow-hidden w-72">
                                                    <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                        24/05/2021, 18:24:56</h5>
                                                    <p
                                                        class="text-13 overflow-hidden text-ellipsis whitespace-nowrap text-gray-500">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="shrink-0 text-end mr-1 w-20">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">+.55 LTC</h6>
                                                    <div class="text-13 dark:text-zinc-100">$91.45</div>
                                                </div>

                                                <div class="shrink-0 text-end">
                                                    <div class="dropdown relative">
                                                        <a href="#!"
                                                            class="btn py-2.5 dropdown-toggle border-0 text-xl text-gray-700 dark:text-gray-100
                                                             "
                                                            id="dropdownMenu11" data-bs-toggle="dropdown"><i
                                                                class="mdi mdi-dots-vertical"></i></a>

                                                        <ul class=" dropdown-menu min-w-max absolute bg-white dark:bg-zinc-700 z-50 float-left py-2 list-none text-left
                                                            rounded-lg shadow-lg hidden bg-clip-padding border-none"
                                                            aria-labelledby="dropdownMenu11">
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap
                                                                bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent
                                                                text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/80"
                                                                    href="#">Something else here</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Footer Start -->
        <footer
            class="footer absolute bottom-0 right-0 left-0 border-t border-gray-50 py-5 px-5 bg-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
            <div class="grid grid-cols-2">
                <div class="grow">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Minia
                </div>
                <div class="hidden md:inline-block text-end">Design & Develop by <a href="#"
                        class="text-violet-500 underline">Themesbrand</a></div>

            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <script src="{{ asset('backoffice/libs/%40popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/feather-icons/feather.min.js') }}"></script>


    <script src="code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <!-- apexcharts -->
    <script src="{{ asset('backoffice/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Plugins js-->
    <script src="{{ asset('backoffice/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
    </script>
    <!-- dashboard init -->
    <script src="{{ asset('backoffice/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('backoffice/js/pages/nav%26tabs.js') }}"></script>

    <script src="{{ asset('backoffice/js/app.js') }}"></script>
</body>

</html>
