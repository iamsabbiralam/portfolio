@include('backoffice.layout.header')
@include('backoffice.layout.top-nav')
@include('backoffice.layout.side-nav')
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
                                                <span class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$
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
                                                <span class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$
                                                    1123.64</span>
                                            </h6>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <p class="mb-2 dark:text-zinc-100">
                                                <i class="mdi mdi-circle align-middle text-10 mr-2 text-sky-500"></i>
                                                Litecoin
                                            </p>
                                            <h6 class="text-gray-800 dark:text-gray-100">35.3811 LTC =
                                                <span class="text-gray-700 dark:text-zinc-100 text-14 font-normal">$
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
                                                <span class="text-16 text-gray-700 dark:text-gray-100">Binance</span>
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
                                                <span class="text-16 text-gray-700 dark:text-gray-100">Coinbase</span>
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
                                                <span class="text-16 text-gray-700 dark:text-gray-100">Bitfinex</span>
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
                                        role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="75">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1 dark:text-zinc-100">Russia <span class="float-right">55%</span>
                                </p>
                                <div class="bg-gray-50 rounded-full mt-2 dark:bg-zinc-700" style="height: 6px;">
                                    <div class="bg-violet-500 progress-bar-striped h-[6px] rounded-l overflow-hidden"
                                        role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                        aria-valuemax="55">
                                    </div>
                                </div>

                                <p class="mt-3 mb-1 dark:text-zinc-100">Australia <span class="float-right">85%</span>
                                </p>
                                <div class="bg-gray-50 rounded-full mt-2 dark:bg-zinc-700" style="height: 6px;">
                                    <div class="bg-violet-500 progress-bar-striped h-[6px] rounded-l overflow-hidden"
                                        role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="85">
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
                                            href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="sell-tab"
                                            role="tab">Sell</a>
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
                                            <div class="flex mb-3 border border-gray-100 rounded dark:border-zinc-600">
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

                                            <div class="flex mb-3 border border-gray-100 dark:border-zinc-600 rounded">
                                                <label
                                                    class="px-3 py-2 border-r border-gray-100 dark:border-zinc-600 bg-gray-50/20 dark:bg-zinc-700 dark:text-gray-100">Price</label>
                                                <input type="text"
                                                    class="w-full bg-gray-50/20 py-1.5 border-0 focus:border-violet-100 focus:ring focus:ring-violet-50/60 focus:z-40 dark:bg-zinc-700 dark:placeholder:text-gray-200 dark:focus:ring-gray-500/10"
                                                    placeholder="$58,245">
                                                <label
                                                    class="px-3 border-l py-2 border-gray-100 dark:border-zinc-600 bg-gray-50/20 dark:bg-zinc-700 dark:text-gray-100">$</label>
                                            </div>

                                            <div class="flex mb-3 border border-gray-100 dark:border-zinc-600 rounded">
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
                                            data-tw-toggle="tab" data-tw-target="all-tab1" role="tab">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                            data-tw-toggle="tab" data-tw-target="buy-tab1" role="tab">Sell</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                            data-tw-toggle="tab" data-tw-target="sell-tab1" role="tab">Buy</a>
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.016 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $125.20</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.56 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $112.34</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1  text-gray-700 dark:text-gray-100">
                                                                Buy LTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                16 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                1.88 LTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $94.22</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                17 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.42 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $84.32</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                18 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.018 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $145.80</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.016 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $125.20</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.56 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $112.34</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.016 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $125.20</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                18 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.018 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $145.80</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1  text-gray-700 dark:text-gray-100">
                                                                Buy LTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                16 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                1.88 LTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $94.22</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.56 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $112.34</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                17 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.42 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $84.32</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.56 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $112.34</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Buy BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.016 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $125.20</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.56 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $112.34</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                18 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.016 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $125.20</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1  text-gray-700 dark:text-gray-100">
                                                                Sell BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                16 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.018 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $145.80</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.56 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $112.34</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell LTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                17 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                1.88 LTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $94.22</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                15 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.42 ETH</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $84.32</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                                            <h5 class="text-sm mb-1 text-gray-700 dark:text-gray-100">
                                                                Sell BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                14 Mar, 2021</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-700 dark:text-gray-100">
                                                                0.016 BTC</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
                                                                Coin Value</p>
                                                        </div>
                                                    </td>

                                                    <td class="p-3">
                                                        <div class="text-end">
                                                            <h5 class="text-sm mb-0 text-gray-500 dark:text-zinc-100">
                                                                $125.20</h5>
                                                            <p class="text-gray-600 dark:text-zinc-100 mb-0 text-xs">
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
                                            <i class="mdi mdi-ethereum text-2xl leading-relaxed text-violet-500"></i>
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
                                            <i class="mdi mdi-litecoin text-2xl leading-relaxed text-violet-500"></i>
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
@include('backoffice.layout.footer')
