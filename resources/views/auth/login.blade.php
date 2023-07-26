<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta content="Tailwind Admin & Dashboard Template" name="description" />
<meta content="" name="Themesbrand" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" href="{{ asset('backoffice/images/favicon.ico') }}" />
<link rel="stylesheet" href="{{ asset('backoffice/css/icons.css') }}" />
<link rel="stylesheet" href="{{ asset('backoffice/css/tailwind.css') }}" />
</head>

<body data-mode="light" data-sidebar-size="lg">
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                    <div class="w-full bg-white xl:p-12 p-10 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                            <div class="my-auto">
                                <form class="mt-4 pt-2" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label
                                            class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Email</label>
                                        <input type="email" name="email" :value="old('email')" required autofocus
                                            autocomplete="username" placeholder="Enter email"
                                            class="w-full rounded placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100/60">
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex">
                                            <div class="flex-grow-1">
                                                <label
                                                    class="text-gray-600 dark:text-gray-100 font-medium mb-2 block">Password</label>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="{{ route('password.request') }}"
                                                    class="text-gray-500 dark:text-zinc-100">Forgot
                                                    password?</a>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <input id="password" type="password" name="password" required
                                                autocomplete="current-password"
                                                class="w-full rounded rounded-r-none placeholder:text-sm py-2 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100/60"
                                                placeholder="Enter password" aria-label="Password"
                                                aria-describedby="password-addon">
                                            <button
                                                class=" bg-gray-200 px-4 rounded rounded-l-none dark:border dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                                                type="button" id="password-addon"><i
                                                    class="mdi mdi-eye-outline"></i></button>
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <div class="col">
                                            <div>
                                                <input type="checkbox"
                                                    class=" h-4 w-4 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer focus:ring-offset-0"
                                                    checked id="exampleCheck1">
                                                <label
                                                    class="align-middle text-gray-600 dark:text-gray-100 font-medium">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <button
                                            class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600"
                                            type="submit">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>
                        <div class="grid grid-cols-12 content-center h-screen">
                            <div class="col-span-8 col-start-3 ">
                                <div id="carouselExampleIndicators" class="carousel slide relative"
                                    data-bs-ride="carousel">
                                    <div
                                        class="carousel-indicators absolute right-0 -bottom-10 left-0 flex justify-start gap-2">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="h-3 w-3 rounded-full bg-white active"
                                            aria-current="true" aria-label="Slide 1"></button>

                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" class="h-3 w-3 rounded-full bg-white/30"
                                            aria-label="Slide 2"></button>

                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"
                                            class="h-3 w-3 rounded-full bg-white/30"></button>
                                    </div>
                                    <div class="carousel-inner relative w-full overflow-hidden">
                                        <div class="carousel-item active ">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on
                                                myself. It's a lot more progressing fun than looking back. That's why I
                                                ultricies enim at malesuada nibh diam on tortor neaded to throw curve
                                                balls.”</h3>
                                            <div class="flex mt-6 pt-4">
                                                <img src="{{ asset('backoffice/images/users/avatar-1.jpg') }}"
                                                    class="h-12 w-12 rounded-full" alt="...">
                                                <div class="flex-1 ml-3 mb-4">
                                                    <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                                    <p class="mb-0 text-white/50">Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backoffice/libs/%40popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backoffice/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backoffice/js/app.js') }}"></script>
</body>

</html>
