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
                <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                    <div class="card-body">
                        <div class="pb-4 bg-white dark:bg-transparent flex justify-between">
                            <label for="table-search" class="sr-only">{{ __('Search') }}</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-magnifying-glass"></i>
                                </div>
                                <input type="text" id="table-search-users"
                                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-50 rounded w-80 bg-gray-50/20 focus:ring-0 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder:text-zinc-100/60 dark:text-zinc-100"
                                    placeholder="Search for categories">
                            </div>
                            <div class="">
                                <a href="">
                                    <button type="button"
                                        class="btn text-white bg-green-500 border-green-500 hover:bg-green-600 hover:border-green-600 focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:bg-green-600 active:border-green-600"><i
                                            class="fa-solid fa-plus align-middle mr-1"></i><span
                                            class="align-middle">{{ __('Create Work Experience') }}</span></button>
                                </a>
                            </div>
                        </div>
                        <div class="relative overflow-x-auto mb-2">
                            <table class="w-full text-sm text-left text-gray-500 ">
                                <thead class="text-sm text-gray-700 dark:text-gray-100 bg-gray-50 dark:bg-zinc-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __('Full Name') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __('Email') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __('Phone') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __('Project Type') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __('Message') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __('Actions') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($contacts as $contact)
                                        <tr
                                            class="bg-white border-b border-gray-50 dark:bg-zinc-700 dark:border-zinc-600">
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $contact->name }}
                                            </td>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $contact->email }}
                                            </td>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $contact->phone }}
                                            </td>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $contact->project_type }}
                                            </td>
                                            <td class="px-6 py-3.5 dark:text-zinc-100">
                                                {{ $contact->message }}
                                            </td>
                                            <td class="px-6 py-3.5 dark:text-zinc-100 flex justify-items-start">
                                                <div class="dropstart text-end relative">
                                                    <a class="btn border-transparent px-6 py-1 text-16 text-gray-500 dark:text-zinc-100 shadow-none dropdown-toggle "
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        id="dropdownMenu1" aria-expanded="false">
                                                        <i class="fas fa-ellipsis"></i>
                                                    </a>
                                                    <ul class=" dropdown-menu min-w-max absolute bg-white z-50 float-left py-2 list-none text-left -right-10 top-6 w-40
                                                        rounded-lg shadow-lg hidden bg-clip-padding border-none dark:bg-zinc-700"
                                                        aria-labelledby="dropdownMenu1">
                                                        <li>
                                                            <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 dark:text-gray-100 hover:bg-gray-50/50 dark:hover:bg-zinc-600/50"
                                                                href="{{ route('contacts.show', $contact->id) }}"><i
                                                                    class="fas fa-light fa-pen-to-square px-1"></i>{{ __('Show') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center dark:text-zinc-100">
                                                {{ __('No data available in table') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation example border">
                            <ul class="flex list-style-none justify-end">
                                {{ $contacts->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backoffice.layout.footer')
