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
  <nav class="z-10 w-full absolute ">
    <div class="xl:container m-auto px-6 md:px-12 lg:px-6">
      <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative ">
        <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer ">
        <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0 ">
          <a href="main.php" aria-label="logo" class="flex space-x-2 items-center ">
            <span class="text-2xl font-bold text-gray-900 dark:text-white K">MONGKOL</span>
          </a>
          <div class="relative flex items-center lg:hidden max-h-10 ">
            <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative  p-6 -mr-6 ">
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

      <div class="text-gray-900 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0 ">
        <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0 ">
          <li class="">
            <a href="book.php" class="block md:px-4 transition hover:text-primary ">
              <span class="">การจองของคุณ</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="mt-12 lg:mt-0 ">
        <div href="#" class="">
          <!-- component -->
          <style>
            .dropdown:hover>.dropdown-content {
              display: block;
            }
          </style>

          <div class="dropdown block relative">
            
            <button
              class="text-white relative flex h-11 lg:w-35 items-center justify-center flex items-center flex-row w-full  rounded-3xl shadow-xl overflow-hidden bg-purple-700 p-3">
              <span> Nanthakan</span>
            </button>
            <ul class="dropdown-content h-11 w-full  absolute hidden text-white pt-1">
              <li><a class="rounded-t bg-purple-500 hover:bg-purple-400 py-2 px-4 block whitespace-no-wrap"
                  href="profile.php">Profile</a></li>
              <li><a class="bg-purple-500 hover:bg-purple-400 py-2 px-4 block whitespace-no-wrap" href="#">Loguot</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </nav>

</body>

</html>