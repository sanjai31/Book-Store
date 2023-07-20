<?php
session_start();


if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])){

    include "db_conn.php";

    include "php/func-book.php";
    $books = get_all_books($conn);

    
    include "php/func-author.php";
    $authors = get_all_author($conn);

    include "php/func-category.php";
    $categories = get_all_categories($conn);


    // vardump($categories);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--Tailwind cdn link-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white dark:bg-slate-800 h-[900px]">
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="admin.php" class="flex items-center">
        <img src="assets/images/logo/book_logo.png" class="h-8 mr-3 w-[3rem] h-[3rem]" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Admin</span>
      </a>
      <div class="flex md:order-2">
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false" onclick="menubtn()">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:ml-[10.5rem] lg:ml-[26.5rem] xl:ml-[42.95rem] md:mt-[-2.3rem] lg:mt-[-2rem]" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700" id="mobileMenu">
        <li>
            <a href="admin.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Admin</a>
          </li>
          <li>
            <a href="index.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Store</a>
          </li>
          <li>
            <a href="add-book.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Add Book</a>
          </li>
          <li>
            <a href="add-category.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Add Category</a>
          </li>
          <li>
            <a href="add-author.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Add Author</a>
          </li>
          <li>
            <a href="logout.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <section class="max-w-screen-xl mx-auto pt-20 item-center">
        <?php if ($books == 0) { ?>
            empty
        <?php } else {?>
        <h4 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 pl-4 pt-4 pb-4">All Books</h4>
        <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">#</th>
                  <th scope="col" class="px-6 py-3">Title</th>
                  <th scope="col" class="px-6 py-3">Author</th>
                  <th scope="col" class="px-6 py-3">Description</th>
                  <th scope="col" class="px-6 py-3">Category</th>
                  <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 0;
                foreach ($books as $book) {
                    $i++
                ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4"><?=$i?></td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img width="50" height="50" src="assets/cover/<?=$book['cover']?>">
                            <a href="assets/files/<?=$book['file']?>"><?=$book['title']?></a>
                        </th>
                        <td class="px-6 py-4">
                            <?php if ($authors == 0) {
                                echo "Undefined";}
                                else{
                                    foreach($authors as $author){
                                        if($author['id'] == $book['author_id']){
                                            echo $author['name'];
                                        }
                                    }
                                }
                            ?>
                        </td>
                        <td class="px-6 py-4"><?=$book['description']?></td>
                        <td class="px-6 py-4">
                            <?php if ($categories == 0) {
                                echo "Undefined";}
                                else{
                                    foreach($categories as $category){
                                        if($category['id'] == $book['category_id']){
                                            echo $category['name'];
                                        }
                                    }
                                }
                            ?>
                        </td>
                        <td class="px-6 py-4 flex justify-around">
                            <a href="edit-book.php?id=<?=$book['id']?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                            <a href="delete-book.php?id=<?=$book['id']?>" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-red-800">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <?php }?>
    </section>

    <section class="max-w-screen-xl mx-auto pt-4 item-center mt-6">
        <?php if ($books == 0) { ?>
            empty
        <?php } else {?>
        <h4 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 pl-4 pt-4 pb-4">All Categories</h4>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th scope="col" class="px-6 py-3 w-[20%]">#</th>
                      <th scope="col" class="px-6 py-3 w-[70%]">Category Name</th>
                      <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $j = 0;
                    foreach ($categories as $category){
                    $j++;
                    ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4"><?=$j?></td>
                        <td class="px-6 py-4"><?=$category['name']?></td>
                        <td class="px-6 py-4 flex gap-3">
                            <a href="edit-category.php?id=<?=$category['id']?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                            <a href="" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-red-800">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>        
        </div>
        <?php }?>

    </section>

    <section class="max-w-screen-xl mx-auto pt-4 item-center mt-6">
        <?php if ($authors == 0) { ?>
            empty
        <?php } else {?>
        <h4 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 pl-4 pt-4 pb-4">All Authors</h4>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-xl">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th scope="col" class="px-6 py-3 w-[20%]">#</th>
                      <th scope="col" class="px-6 py-3 w-[70%]">Author Name</th>
                      <th scope="col" class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $k = 0;
                    foreach ($authors as $author){
                    $k++;
                    ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4"><?=$k?></td>
                        <td class="px-6 py-4"><?=$author['name']?></td>
                        <td class="px-6 py-4 flex gap-3">
                            <a href="edit-author.php?id=<?=$author['id']?>" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                            <a href="#" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-red-800">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>        
        </div>
        <?php }?>

    </section>
    
    
    <!--main-->
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php } else{
    header("Location: login.php");
    exit;
}?>