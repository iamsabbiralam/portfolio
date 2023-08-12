@include('backoffice.layout.header')
@include('backoffice.layout.top-nav')
@include('backoffice.layout.side-nav')
<div class="col-span-12 xl:col-span-6">
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">
            <div class="container-fluid px-[0.625rem]">
                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Basic Elements
                        </h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Components
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
                                            class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">Basic
                                            Elements</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                            <div class="card-body pb-0">
                                <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100 text-center">Client Details</h6>
                            </div>
                            <div class="card-body relative overflow-x-auto">
                                <table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                                    <thead>
                                        <tr>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600">Full Name</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Email</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Phone</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Project Type</th>
                                            <th class="p-4 pr-8 border border-y-2 border-gray-50 dark:border-zinc-600 border-l-0">Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-4 pr-8 border border-t-0 border-gray-50 dark:border-zinc-600 text-center">{{ $contact->name }}</td>
                                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600  text-center">{{ $contact->email }}</td>
                                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600  text-center">{{ $contact->phone }}</td>
                                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">{{ $contact->project_type }}</td>
                                            <td class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600 text-center">{{ $contact->message }}</td>
                                        </tr>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backoffice.layout.footer')