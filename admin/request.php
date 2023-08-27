<?php include("../abject/index.php");?>

<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 bg-gradient-to-br px-2">
    <?php include("../abject/search.php");?>

    <nav class="flex-container px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] "
        aria-label="Breadcrumb">
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
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">คำขอร้านอาหาร</a>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex flex-wrap my-5 mx-2 ">
        <div class="w-full  lg:w-1/4 p-2 ">
            <div
                class='bg-white rounded-3xl shadow-xl overflow-hidden hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0'>
                <div class='max-w-md mx-auto'>
                    <div class='h-[236px]'
                        style='background-image:url(https://img.freepik.com/free-photo/pasta-spaghetti-with-shrimps-sauce_1220-5072.jpg?w=2000&t=st=1678041911~exp=1678042511~hmac=e4aa55e70f8c231d4d23832a611004f86eeb3b6ca067b3fa0c374ac78fe7aba6);background-size:cover;background-position:center'>
                    </div>
                    <div class='p-4 sm:p-6'>
                        <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>ชื่อ</p>
                        <div class='flex flex-row'>
                            <p class='text-[17px] font-bold text-[#0FB478]'>ประเภท</p>
                        </div>
                        <p class='text-[#7C7C80] font-[15px] mt-6'>330 ถ.เชียงใหม่-ลำปาง ต.ป่าตัน อ.เมือง
                            รหัสไปรษณีย์ 50300 เชียงใหม่</p>
                            <p class='text-[#7C7C80] font-[15px] mt-6'>เบอร์โทร 0925307452</p>
                        <a target='_blank' href='foodiesapp://food/1001'
                            class='block mt-10 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                          ยืนยันคำขอ
                        </a>
                        <a target='_blank' href="https://apps.apple.com/us/app/id1493631471"
                            class='block mt-1.5 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform rounded-[14px] hover:bg-[#F2ECE7] hover:text-[#000000dd] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                            ลบคำขอ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>