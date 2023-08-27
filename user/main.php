<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mongkol</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/index.350e2433.css" />
</head>
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

<body class="bg-white ">
    <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
        <div class="blur-[100px] h-32 bg-gradient-to-br from-purple-700 to-purple-700 "></div>
        <div class="blur-[100px] h-32 bg-gradient-to-r from-fuchsia-400 to-purple-700"></div>
    </div>
    <nav class="z-10 w-full absolute ">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative ">
                <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer ">
                <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0 ">
                    <a href="#" aria-label="logo" class="flex space-x-2 items-center ">
                        <span class="text-2xl font-bold text-gray-900 dark:text-white K">MONGKOL</span>
                    </a>
                    <div class="relative flex items-center lg:hidden max-h-10 ">
                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger"
                            class="relative  p-6 -mr-6 ">
                            <div aria-hidden="true" id="line"
                                class="m-auto h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300 ">
                            </div>
                            <div aria-hidden="true" id="line2"
                                class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300 ">
                            </div>
                        </label>
                    </div>
                </div>
                <div aria-hidden="true"
                    class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70 ">
                </div>
                <div class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top 
                            lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none
                            peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none 
                            dark:shadow-none dark:bg-gray-800 dark:border-gray-700 ">

                    <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0 ">
                        <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0 ">
                <li class="">
                  <a href="#" class="block md:px-4 transition hover:text-primary ">
                    <span class="">Teams</span>
                  </a>
                </li>
                <li class="">
                  <a href="#" class="block md:px-4 transition hover:text-primary ">
                    <span class="">Enterprise</span>
                  </a>
                </li>
                <li class="">
                  <a href="#" class="block md:px-4 transition hover:text-primary ">
                    <span class="">Ressources</span>
                  </a>
                </li>
                <li class="">
                  <a href="#" class="text-white relative flex h-11 w-full items-center justify-center flex items-center flex-row w-full  rounded-3xl shadow-xl overflow-hidden bg-purple-700 p-3">
                    <span class="">Pricing</span>
                  </a>
                </li>

              </ul>
                    </div>
                    <div class="mt-12 lg:mt-0 ">
                        <a href="#"
                            class="">
                            <span class="relative text-sm font-semibold text-white ">Logout</span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </nav>
    </div>

    <div class="lg:ml-12 lg:mr-12 mr-0 ml-0 content item-center transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    <form>   
        
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ค้นหาร้านอาหาร" required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ค้นหา</button>
        </div>
    </form>

        <div class="flex flex-wrap my-5 mx-2">
            <div class="w-full lg:w-1/5  p-2">
                <a href="datdresadmin.php"
                    class="flex items-center flex-row w-full bg-white rounded-3xl shadow-xl overflow-hidden bg-[#666FC1] p-3 hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <div class="h-full w-full">
                        <div class="relative w-full">
                            <img src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/Nft3.3b3e6a4b3ada7618de6c.png"
                                class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full" alt="">
                            <button
                                class="absolute top-3 right-3 flex items-center justify-center rounded-full bg-white p-2 text-brand-500 hover:cursor-pointer">
                                <div
                                    class="flex h-full w-full items-center justify-center rounded-full text-xl hover:bg-gray-50">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z">
                                        </path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                            <div class="mb-2">
                                <p class="text-lg font-bold text-navy-700"> Abstract Colors </p>
                                <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">By Esthera Jackson </p>
                            </div>
                            <div class="flex flex-row-reverse md:mt-2 lg:mt-0">
                                <span
                                    class="z-0 ml-px inline-flex h-8 w-8 items-center justify-center rounded-full border-2 border-white bg-[#E0E5F2] text-xs text-navy-700 ">+5</span><span
                                    class="z-10 -mr-3 h-8 w-8 rounded-full border-2 border-white">
                                    <img class="h-full w-full rounded-full object-cover"
                                        src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar1.eeef2af6dfcd3ff23cb8.png"
                                        alt="">
                                </span>
                                <span class="z-10 -mr-3 h-8 w-8 rounded-full border-2 border-white">
                                    <img class="h-full w-full rounded-full object-cover"
                                        src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar2.5692c39db4f8c0ea999e.png"
                                        alt="">
                                </span>
                                <span class="z-10 -mr-3 h-8 w-8 rounded-full border-2 border-white">
                                    <img class="h-full w-full rounded-full object-cover"
                                        src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar3.9f646ac5920fa40adf00.png"
                                        alt="">
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between md:items-center lg:justify-between ">
                            <div class="flex">
                                <p class="!mb-0 text-sm font-bold text-brand-500">Current Bid: 0.91 <span>ETH</span></p>
                            </div>
                            <button href=""
                                class="linear rounded-[20px] bg-brand-900 px-4 py-2 text-base font-medium text-white transition duration-200 hover:bg-brand-800 active:bg-brand-700">Place
                                Bid</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full lg:w-1/5  p-2">
                <a href="datdresadmin.php"
                    class="flex items-center flex-row w-full bg-white rounded-3xl shadow-xl overflow-hidden bg-[#666FC1] p-3 hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <div class="h-full w-full">
                        <div class="relative w-full">
                            <img src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/Nft3.3b3e6a4b3ada7618de6c.png"
                                class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full" alt="">
                            <button
                                class="absolute top-3 right-3 flex items-center justify-center rounded-full bg-white p-2 text-brand-500 hover:cursor-pointer">
                                <div
                                    class="flex h-full w-full items-center justify-center rounded-full text-xl hover:bg-gray-50">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z">
                                        </path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                            <div class="mb-2">
                                <p class="text-lg font-bold text-navy-700"> Abstract Colors </p>
                                <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">By Esthera Jackson </p>
                            </div>
                            <div class="flex flex-row-reverse md:mt-2 lg:mt-0">
                                <span
                                    class="z-0 ml-px inline-flex h-8 w-8 items-center justify-center rounded-full border-2 border-white bg-[#E0E5F2] text-xs text-navy-700 ">+5</span><span
                                    class="z-10 -mr-3 h-8 w-8 rounded-full border-2 border-white">
                                    <img class="h-full w-full rounded-full object-cover"
                                        src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar1.eeef2af6dfcd3ff23cb8.png"
                                        alt="">
                                </span>
                                <span class="z-10 -mr-3 h-8 w-8 rounded-full border-2 border-white">
                                    <img class="h-full w-full rounded-full object-cover"
                                        src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar2.5692c39db4f8c0ea999e.png"
                                        alt="">
                                </span>
                                <span class="z-10 -mr-3 h-8 w-8 rounded-full border-2 border-white">
                                    <img class="h-full w-full rounded-full object-cover"
                                        src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/avatar3.9f646ac5920fa40adf00.png"
                                        alt="">
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between md:items-center lg:justify-between ">
                            <div class="flex">
                                <p class="!mb-0 text-sm font-bold text-brand-500">Current Bid: 0.91 <span>ETH</span></p>
                            </div>
                            <button href=""
                                class="linear rounded-[20px] bg-brand-900 px-4 py-2 text-base font-medium text-white transition duration-200 hover:bg-brand-800 active:bg-brand-700">Place
                                Bid</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</body>

</html>