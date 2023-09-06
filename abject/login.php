<?php
require_once '../config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @font-face {
      font-family: 'Kanit';
      src: url('../font/Kanit-Regular.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    body {
      font-family: 'Kanit', sans-serif;
    }
  </style>
</head>
<!-- component -->
<div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url();">
  <div class="absolute bg-[#A780DA] from-green-500 to-green-400 opacity-75 inset-0 z-0"></div>
  <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
    <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
      <div class="self-start hidden lg:flex flex-col  text-white">
        <img src="" class="mb-3">
        <h1 class="mb-3 font-bold text-5xl">Hi ยินดีต้อนรับ</h1>
        <p class="pr-3">เบื่อการต้องไปต่อคิวหน้าร้านหรือเปล่า?
          มาใช้บริการเราสิ แล้วคุณจะสนุกกับการทานมากขึ้น
        </p>
      </div>
    </div>
    <div class="flex justify-center self-center  z-10">
      <form action="../config/login.php" method="post" class="p-12 bg-white mx-auto rounded-2xl w-100 ">
        <div class="mb-4">
          <h3 class="font-semibold text-2xl text-gray-800">เข้าสู่ระบบบ</h3>
          <p class="text-gray-500">เข้าสู่ระบบเพื่อเปืดประสบการณ์ ก่ีใช้งาน</p>
        </div>
        <div class="space-y-5">
          <div class="space-y-2">
            <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
            <input
              class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-[#7F61A7]"
              type="text" name="email">
          </div>
          <div class="space-y-2">
            <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
              Password
            </label>
            <input
              class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-[#7F61A7]"
              type="text" name="Password">
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember_me" name="remember_me" type="checkbox"
                class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
              <label for="remember_me" class="ml-2 block text-sm text-[#A880D9]">
                Remember me
              </label>
            </div>
            <div class="text-sm">
              <a href="#" class="text-[#A880D9] hover:text-[#EBB1C5]">
                Forgot your password?
              </a>
            </div>
          </div>
          <div class="w-full relative inline-block text-left dropdown">
            <span class="rounded-md shadow-sm"><button
                class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                <span>ลงทะเบียน</span>
                <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </button></span>
            <div
              class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
              <div
                class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                <div class="py-1">
                  <a href="singinuser.php" tabindex="0"
                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                    role="menuitem">ผู้ใช้งาน</a>
                  <a href="singinres.php" tabindex="1"
                    class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                    role="menuitem">ร้านอาหาร</a>

                </div>
              </div>
            </div>
           
          </div>
          <button type="submit"
              class="mt-4 w-full flex justify-center text-black bg-[#F8EDEC]  hover:bg-[#EBB1C5]  hover:text-white text-gray-600 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
              Sign in
            </button>
      </form>
    </div>

    <style>
      .dropdown:focus-within .dropdown-menu {
        opacity: 1;
        transform: translate(0) scale(1);
        visibility: visible;
      }
    </style>
  </div>
</div>

</body>

</html>