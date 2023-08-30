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

<body class="bg-white">

    <?php include("index.php");?>

    <div
        class="lg:ml-10 lg:mr-10  mr-0 ml-0 content item-center transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        <div
            class="relative w-full group max-w-md min-w-0 mx-auto mt-6  break-words bg-white border shadow-2xl  md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class=" mt-2 text-center">
                    <h3 class="mb-1 text-2xl font-bold leading-normal text-gray-700 dark:text-gray-300">ชื่อร้านอาหาร</h3>
                    
                    
                </div>
                <div class="pt-6 mx-6 mt-4 text-center border-t border-gray-200 ">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-6">
                            <p class="mb-4 font-light leading-relaxed text-gray-600 ">
                                คิวของคุณ 
                            </p>
                            <h1 class="mb-1 text-4xl font-bold leading-normal text-gray-700 dark:text-gray-300">003</h1>
                            <p class="mb-4 font-light leading-relaxed text-gray-600 ">
                                รอ 1 คิว
                            </p>
                        </div> 
                        <button  data-modal-toggle="cancel" type="submit" class="mt-3 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ยกเลิก</button>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    </div>

    <div id="cancel" aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="cancel">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">คุณยืนยันการยกเลิกคิวใช่ไหม?</h3>
                    <div>
                        <label  class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">สาเหตุยกเลิก</label>
                        <!-- voidqueue go history -> รายการยกเลิก -->
                        <input type="post" name="voidqueue"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500
                         focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" 
                         required="">
                    </div>
                    <button type="submit" class="class='mt-2 block w-full px-4 py-3 font-medium tracking-wide text-black text-center capitalize transition-colors duration-300 transform bg-[#EFF2F8] 
                        rounded-[14px] hover:bg-[#666FC1] hover:text-white  focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80">ยืนยันการยกเลิก</button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>

</html>