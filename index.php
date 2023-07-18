<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--Tailwind cdn link-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center">
        <img src="assets/images/logo/book_logo.png" class="h-8 mr-3 w-[3rem] h-[3rem]" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BOOK STORE</span>
      </a>
      <div class="flex md:order-2">
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false" onclick="menubtn()">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:ml-[15rem] lg:ml-[40rem] xl:ml-[55rem] lg:mt-[-2rem]" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700" id="mobileMenu">
        <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Store</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
          </li>
          <li>
            <a href="login.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    <section class="max-w-screen-xl mx-auto pt-20 mt-12 item-center pl-5 pr-5">

    <form class="flex items-center">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-[60%]">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                </svg>
            </div>
            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" ">
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-gray-700 rounded-lg border border-blue-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>

    <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 mt-10">
      <div class="col-span-2 row-span-10">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 border p-2 gap-4">
          <div class="border">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <tbody class="border-b border-r border-l border-t">
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 px-2">
                    <td class="">
                      <img src="assets/cover/crime&punishment.jpg" width="79%">
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h4 class="text-lg font-bold">Crime and Punishment</h4>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">By: Walt Whitman</h5>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <p class="">Crime and Punishment is a function novel about mental anguish and moral dilemmas of a conflicted former student, written by Fyodor Dostoevsky, a Russian Aythor remembered for his most popular works</p>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">Category: Novel</h5>
                    </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-4 py-2 flex gap-3">
                    <a href="#" class="text-white bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-lime-600 dark:hover:bg-lime-600 focus:outline-none dark:focus:ring-lime-800">Open</a>
                      <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="border">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <tbody>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">
                    <td class="">
                      <img src="assets/images/great_expectations.jpg" width="100%">
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h4 class="text-lg font-bold">Great Expectations</h4>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">By: Jack Byron</h5>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <p class="">Crime and Punishment is a function novel about mental anguish and moral dilemmas of a conflicted former student, written by Fyodor Dostoevsky, a Russian Aythor remembered for his most popular works</p>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">Category: Novel</h5>
                    </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-4 py-2 flex gap-3">
                    <a href="#" class="text-white bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-lime-600 dark:hover:bg-lime-600 focus:outline-none dark:focus:ring-lime-800">Open</a>
                      <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="border">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <tbody>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">
                    <td class="">
                      <img src="assets/images/Goodomenscover.jpg" width="83%">
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h4 class="text-lg font-bold">Goodomenscover</h4>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">By: Lord Byron</h5>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <p class="">Crime and Punishment is a function novel about mental anguish and moral dilemmas of a conflicted former student, written by Fyodor Dostoevsky, a Russian Aythor remembered for his most popular works</p>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">Category: Comedy</h5>
                    </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-4 py-2 flex gap-3">
                    <a href="#" class="text-white bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-lime-600 dark:hover:bg-lime-600 focus:outline-none dark:focus:ring-lime-800">Open</a>
                      <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="border">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <tbody class="border-b border-r border-l border-t">
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 px-2">
                    <td class="">
                      <img src="assets/cover/crime&punishment.jpg" width="79%">
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h4 class="text-lg font-bold">Crime and Punishment</h4>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">By: Walt Whitman</h5>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <p class="">Crime and Punishment is a function novel about mental anguish and moral dilemmas of a conflicted former student, written by Fyodor Dostoevsky, a Russian Aythor remembered for his most popular works</p>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">Category: Novel</h5>
                    </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-4 py-2 flex gap-3">
                    <a href="#" class="text-white bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-lime-600 dark:hover:bg-lime-600 focus:outline-none dark:focus:ring-lime-800">Open</a>
                      <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="border">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <tbody>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">
                    <td class="">
                      <img src="assets/images/great_expectations.jpg" width="100%">
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h4 class="text-lg font-bold">Great Expectations</h4>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">By: Jack Byron</h5>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <p class="">Crime and Punishment is a function novel about mental anguish and moral dilemmas of a conflicted former student, written by Fyodor Dostoevsky, a Russian Aythor remembered for his most popular works</p>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">Category: Novel</h5>
                    </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-4 py-2 flex gap-3">
                    <a href="#" class="text-white bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-lime-600 dark:hover:bg-lime-600 focus:outline-none dark:focus:ring-lime-800">Open</a>
                      <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="border">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <tbody>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">
                    <td class="">
                      <img src="assets/images/Goodomenscover.jpg" width="83%">
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h4 class="text-lg font-bold">Goodomenscover</h4>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">By: Lord Byron</h5>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <p class="">Crime and Punishment is a function novel about mental anguish and moral dilemmas of a conflicted former student, written by Fyodor Dostoevsky, a Russian Aythor remembered for his most popular works</p>
                    </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                    <td class="pl-2 pr-2">
                      <h5 class="text-lg font-semibold">Category: Comedy</h5>
                    </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-4 py-2 flex gap-3">
                    <a href="#" class="text-white bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-lime-600 dark:hover:bg-lime-600 focus:outline-none dark:focus:ring-lime-800">Open</a>
                      <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="relative overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          Category
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">

                      <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                          <a href="#">Novel</a>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">
                      <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                          <a href="#">Poetry</a>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                      <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                        <a href="#">Programming</a>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                        <a href="#">Comedy</a>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div>
        <div class="relative overflow-x-auto mt-5">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          Authors
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">

                      <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                        <a href="#">Walt Whitman</a>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">
                      <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                        <a href="#">Lord Byron</a>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                     <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                        <a href="#">Jack Byron</a>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-800 dark:border-gray-700">
                     <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                        <a href="#">Jack London</a>
                      </td>
                  </tr>
                  <tr class="bg-white border-b border-r border-l dark:bg-gray-900 dark:border-gray-700">
                     <td class="px-6 py-4 hover:bg-slate-100 cursor-pointer">
                        <a href="#">Thomas H. Cormen</a>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    </section>
    <!--main-->
    <script src="assets/js/main.js"></script>
</body>
</html>