@include('backoffice.layout.header')
@include('backoffice.layout.top-nav')
@include('backoffice.layout.side-nav')
<form action="{{ route('recent-works.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main-content">
        <div class="page-content dark:bg-zinc-700">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Recent Work
                            Create</h4>
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
                                            class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">Recent
                                            Work Create</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="grid grid-cols-1">
                    <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                        <div class="card-body pb-0">
                            <h6 class="mb-1 text-15 text-gray-700 dark:text-gray-100">Work inputs</h6>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Title</label>
                                        <input
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/60"
                                            type="text" name="title" id="example-text-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-text-input"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Type</label>
                                        <input
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100/50 dark:text-zinc-100/50"
                                            type="text" name="types" id="example-text-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-thumbnail-input"
                                            class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">Thumbnail</label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/60"
                                            type="file" name="thumbnail" id="example-thumbnail-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-description-input"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Description</label>
                                        <textarea
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/60"
                                            name="description" id="description" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-4">
                                        <label for="example-date-input"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Completion
                                            Date</label>
                                        <input
                                            class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/60"
                                            type="date" name="completion_date" id="example-date-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-image-input"
                                            class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">Cover
                                            Image</label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/60"
                                            type="file" name="cover_image" id="example-image-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-image-input"
                                            class="block font-medium text-gray-700 dark:text-zinc-100 mb-2">Sub
                                            Image</label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/60"
                                            type="file" name="sub_image" id="example-image-input">
                                    </div>
                                    <div class="mb-4">
                                        <label for="example-duration-input"
                                            class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Duration</label>
                                        <input
                                            class="w-full rounded border-gray-100 py-2.5 text-sm text-gray-500 focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100/60"
                                            type="text" name="duration" id="example-duration-input">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body flex flex-wrap gap-5">
                                <button type="submit"
                                    class="btn text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
@include('backoffice.layout.footer')
