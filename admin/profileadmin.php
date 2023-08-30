<?php include("../abject/index.php");?>

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 bg-gradient-to-br px-2">

    <nav class="flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="mainadmin.php"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fillRule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clipRule="evenodd"></path>
                    </svg>
                    <a href=""
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">แก้ไขโปรไฟล์</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex flex-wrap my-5 mx-2 justify-center">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-[#666FC1] rounded-lg">
                    <div class="image overflow-hidden">
                        <img class="h-30 rounded-full w-30 mx-auto"
                            src="data:image/jpeg;base64,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"
                            alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1 text-center mt-3">งานหัวควย</h1>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm  rounded-lg">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            
                        </span>
                        
                        <button data-modal-toggle="pas-modal" class="text-sm border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">แก้ไขรหัส</button>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2">ควย</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">ตวย</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">number</div>
                                <div class="px-4 py-2">xxxxxxxxxxxxxxxxxxxx+</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">ตำแหน่ง</div>
                                <div class="px-4 py-2">ออออออ</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:jane@example.com"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-modal-toggle="authentication-modal" class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100
                         hover:shadow-xs p-3 my-4 ">edit profile</button>
                </div>

                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <!-- <div class="bg-white p-3 shadow-sm rounded-lg">

                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Experience</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Education</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Masters Degree in Oxford</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                <!-- End of Experience and education grid -->
            </div>
            <!-- End of profile tab -->
        </div>
    </div>
</div>
</div>
</div>
<!-- Main modal -->
<div id="authentication-modal" aria-hidden="true"
    class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="https://formbold.com/s/FORM_ID" method="POST">
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Name
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Number
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            email
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Upload File
                        </label>

                        <div class="mb-8">
                            <!-- component -->
                            <div class="flex = w-full items-center justify-center ">
                                <div class="rounded-md border border-gray-100 bg-white p-4 shadow-md">
                                    <label for="upload" class="flex flex-col items-center gap-2 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-10 w-10 fill-white stroke-indigo-500" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span class="text-gray-600 font-medium">Upload file</span>
                                    </label>
                                    <input id="upload" type="file" class="hidden" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div>
                        <button
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Send File
                        </button>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>




</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>