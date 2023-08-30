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
        <?php include("search.php");?>
    </div>
    <div class="xl:container m-auto px-6 md:px-12 lg:px-6">
        <p class="font-bold text-gray-900 mt-6 text-2xl my-5 mx-5 ">ร้านอาหาร</p>
        <div class="flex flex-wrap my-5 mx-2">
            <div class="w-full lg:w-1/5  p-2">
                <button data-modal-toggle="res1"
                    class="flex items-center flex-row w-full bg-white rounded-3xl shadow-xl overflow-hidden  p-3 hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <div class="h-full w-full">
                        <div class="relative w-full">
                            <img src="data:image/jpeg;base64,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"
                                class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full" alt="">
                        </div>
                        <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                            <div class="mb-2">
                                <p class="text-lg font-bold text-navy-700"> ชื่อร้านอาหาร</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="w-full lg:w-1/5  p-2">
                <a href="datdresadmin.php"
                    class="flex items-center flex-row w-full bg-white rounded-3xl shadow-xl overflow-hidden  p-3 hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <div class="h-full w-full">
                        <div class="relative w-full">
                            <img src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/Nft3.3b3e6a4b3ada7618de6c.png"
                                class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full" alt="">
                        </div>
                        <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                            <div class="mb-2">
                                <p class="text-lg font-bold text-navy-700"> ชื่อร้านอาหาร</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div id="res1" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="res1">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">ชื่อร้าน</h3>
                        <div>
                            <label for="email"
                                class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">First
                                Name</label>
                            <div class="custom-number-input h-10 w-full">
                                </label>
                                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                    <button data-action="decrement"
                                        class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">−</span>
                                    </button>
                                    <input type="number"
                                        class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                        name="custom-input-number" value="0"></input>
                                    <button data-action="increment"
                                        class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>

                            </div>

                            <button type="submit" class="mt-3 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">comfrim</button>

                    </form>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

        <!-- component -->

        <style>
            input[type='number'],
            input[type='number'] {
                -webkit-appearance: none;
                margin: 0;
            }

            .custom-number-input input:focus {
                outline: none ;
            }

            .custom-number-input button:focus {
                outline: none;
            }
        </style>

        <script>
            function decrement(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                    'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value--;
                target.value = value;
            }

            function increment(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                    'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value++;
                target.value = value;
            }
            const decrementButtons = document.querySelectorAll(
                `button[data-action="decrement"]`
            );
            const incrementButtons = document.querySelectorAll(
                `button[data-action="increment"]`
            );
            decrementButtons.forEach(btn => {
                btn.addEventListener("click", decrement);
            });
            incrementButtons.forEach(btn => {
                btn.addEventListener("click", increment);
            });
        </script>
</body>

</html>