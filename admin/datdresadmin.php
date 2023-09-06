<?php include("../abject/index.php");?>

<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 bg-gradient-to-br px-2">
    <?php include("../abject/search.php");?>

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
                    <a href="#"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">ข้อมูลร้านอ</a>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex flex-wrap my-5 mx-2 ">
        <div class="w-full  lg:w-1/4 p-2">
            <div
                class='bg-white rounded-3xl shadow-xl overflow-hidden hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0 '>
                <div class='max-w-md mx-auto'>
                    <div class='h-[236px]'
                        style='background-image:url(https://www.scb.co.th/content/dam/scb/personal-banking/stories-tips/thai-food/thai-food10.jpg);background-size:cover;background-position:center'>
                    </div>
                    <div class='p-4 sm:p-6'>
                        <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>MONKOL LODDDD</p>
                        <div class='flex flex-row'>
                            <p class='text-[17px] font-bold text-[#0FB478]'>จองคิว</p>
                        </div>
                        <p class='text-[#7C7C80] font-[15px] mt-6'>330 ถ.เชียงใหม่-ลำปาง ต.ป่าตัน อ.เมือง
                            รหัสไปรษณีย์ 50300 เชียงใหม่</p>
                            <p class='text-[#7C7C80] font-[15px] mt-6'>email</p>
                            <p class='text-[#7C7C80] font-[15px] mt-6'>เบอร์โทร 0925307452</p>

                        <a  
                            class='block mt-10 w-full px-4 py-3 font-medium tracking-wide text-black text-center capitalize transition-colors duration-300 transform bg-[#EFF2F8] rounded-[14px] hover:bg-[#666FC1] hover:text-white  focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                            ยกเลิกร้านอาหาร
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full  lg:w-1/4 p-2">
            <div
                class='bg-white rounded-3xl shadow-xl overflow-hidden hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0 '>
                <div class='max-w-md mx-auto'>
                    <div class='h-[236px]'
                        style='background-image:url(https://www.scb.co.th/content/dam/scb/personal-banking/stories-tips/thai-food/thai-food10.jpg);background-size:cover;background-position:center'>
                    </div>
                    <div class='p-4 sm:p-6'>
                        <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>MONKOL LODDDD</p>
                        <div class='flex flex-row'>
                            <p class='text-[17px] font-bold text-[#0FB478]'>จองโต๊ะ</p>
                        </div>
                        <p class='text-[#7C7C80] font-[15px] mt-6'>330 ถ.เชียงใหม่-ลำปาง ต.ป่าตัน อ.เมือง
                            รหัสไปรษณีย์ 50300 เชียงใหม่</p>
                            <p class='text-[#7C7C80] font-[15px] mt-6'>เบอร์โทร 0925307452</p>

                        <a 
                            class='block mt-10 w-full px-4 py-3 font-medium tracking-wide text-black text-center capitalize transition-colors duration-300 transform bg-[#EFF2F8] rounded-[14px] hover:bg-[#666FC1] hover:text-white  focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                            ยกเลิกร้านอาหาร
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class = "p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class = "font-medium">Info alert!</span> Change a few things up and try submitting again.
        </div>
        <div class = "p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class = "font-medium">Danger alert!</span> Change a few things up and try submitting again.
        </div>
        <div class = "p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class = "font-medium">Success alert!</span> Change a few things up and try submitting again.
        </div> -->
</div>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>