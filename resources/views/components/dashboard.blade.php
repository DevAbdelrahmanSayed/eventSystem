<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Club</title>

    <style>

        .main-container {
            position: relative;
            padding-top: 2rem;
        }

        .posts-container {
            margin-top: 4rem;
        }
    </style>
</head>
<body>

<div class="antialiased bg-[#23242A] ">
    <nav class="bg-[#323741] border-b border-[#424650] px-4 py-2.5  dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <button
                    data-drawer-target="drawer-navigation"
                    data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg
                        aria-hidden="true"
                        class="hidden w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>
                <a href="index10.html" class="flex items-center justify-between mr-4">
                    <img
                        src="assets\js\pages\css\image\logo2.png"
                        class="mr-3 h-8"
                        style="height: 60px;"
                    />
                    <span class="self-center text-2xl font-bold whitespace-nowrap   text-stroke-white text-[#F5F5F7]">Student Club</span>



                </a>

            </div>
            <div class="flex items-center lg:order-2">
                <button
                    type="button"
                    data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                >
                    <span class="sr-only">Toggle search</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                    </svg>
                </button>

                <!-- club details -->



                <!-- Dropdown menu -->
                <div
                    class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded-xl"
                    id="notification-dropdown"
                >
                    <div
                        class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-600 dark:text-gray-300"
                    >

                    </div>


                    <div class="inline-flex items-center">
                        <svg
                            aria-hidden="true"
                            class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path
                                fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        View all
                    </div>
                    </a>
                </div>


            </div>
        </div>
    </nav>

    <!-- Sidebar -->

    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-[#323741] border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav"
        id="drawer-navigation"
    >


        <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 rounded-md"></a>

        <div class="py-4 px-4 bg-gray-0 dark:bg-gray-0 mb-2">
            <div class="flex items-center">
                <img src="assets\js\pages\css\image\prof.jpg" alt="Profile" class="w-12 h-12 rounded-full" />
                <div class="ml-3">
                    <p class="text-lg font-semibold text-gray-900 text-white">Naji Aysar</p>
                    <p class="text-white">ID: 123456</p>
                </div>
            </div>
        </div>




        <div class="overflow-y-auto py-5 px-3 h-full bg-[#323741]">
            <!-- Search form if needed -->
            <ul class="space-y-2">
                <li>
                    <a
                        href="html\club.html"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-[#827FFF] dark:hover:bg-[#827FFF] group  "
                        aria-current="page"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span class="ml-3 text-white">Clubs</span>
                    </a>
                </li>

                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-[#827FFF] dark:hover:bg-[#827FFF] "
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span class="ml-3 text-white">Weekly activity</span>
                    </a>
                </li>


                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-[#827FFF] dark:hover:bg-[#827FFF] "
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                        <span class="ml-3 text-white">Create Club</span>
                    </a>
                </li>


                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-[#827FFF] dark:hover:bg-[#827FFF] " aria-controls="dropdown-authentication"
                        data-collapse-toggle="dropdown-authentication"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        <span class="ml-3 text-white">settings </span>

                    </a>
                </li>
                <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                    <li>
                        <a href="index11.html" class="flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF] dark:hover:bg-[#827FFF ">
                            <svg class="svg-icon w-5 h-5 text-white" viewBox="0 0 20 20" stroke="white">
                                <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z" ></path>
                            </svg>

                            <span class="ml-3 text-white"> My Profile</span>
                        </a>
                    </li>




                </ul>


                <li>
                    <a
                        href="#"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-[#827FFF] dark:hover:bg-[#827FFF] "
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9"/></svg>
                        <span class="ml-3 text-white">Log out </span>
                    </a>
                </li>
            </ul>
        </div>

    </aside>

    <main class="p-4 md:ml-64 h-auto pt-20">


        <!-- Container for search form and title with customizable underline length -->
        <div class="flex justify-between items-center pt-8 px-8">
            <!-- Clubs title with customizable underline -->
            <div class="relative">
                <h2 class="text-4xl font-bold text-white">Clubs</h2>
                <div class="w-full h-0.5 bg-white mt-5">
                    <!-- Customizable line color and length -->
                    <div class="absolute bottom-0 left-0 h-0.5 bg-white rounded-l-full" style="width: 100%;"></div>
                    <!-- Additional customizable white line length -->
                    <div class="absolute bottom-0 left-[100%] h-0.5 bg-white rounded-r-full" style="width: calc(100% + 100px);"></div>
                </div>
            </div>


            <!-- Search Form aligned with the title -->
            <div class="relative w-full max-w-xs">
                <form action="#" method="GET" class="flex items-center">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" stroke="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                        </svg>
                    </div>
                    <input type="text" name="email" id="topbar-search" class="bg-[#1E1F25] border border-[#424650] text-white text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full pl-10 p-2.5  border-[#424650] dark:placeholder-white text-white dark:focus:ring-primary-500 dark:focus:border-[#827FFF]" placeholder="Search" />
                </form>
            </div>
        </div>
        <!-- Divider Line -->
        <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
            <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6"></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

            <div class="col-span-1">
                <div class="p-4 overflow-hidden border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <figure class="overflow-hidden rounded-t-lg">
                            <img src="assets\js\pages\css\image\scr.jpg" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets\js\pages\css\image\prof.jpg" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
                                </div>
                                <div class="ml-3">
                                    <a href="Club-author.html" class="text-sm font-medium text-white">NAJI AYSAR</a>
                                    <p class="text-xs text-white">Software Engineering</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>


            <div class="col-span-1">
                <div class="p-4 overflow-hidden border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <figure class="overflow-hidden rounded-t-lg">
                            <img src="assets\js\pages\css\image\scr club\2.jpg" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out dark:text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets\js\pages\css\image\prof.jpg" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
                                </div>
                                <div class="ml-3">
                                    <a href="Club-author.html" class="text-sm font-medium  text-white">NAJI AYSAR</a>
                                    <p class="text-xs text-white">Software Engineering</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>


            <div class="col-span-1">
                <div class="p-4 overflow-hidden border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">



                    <article>
                        <figure class="overflow-hidden rounded-t-lg">
                            <img src="assets\js\pages\css\image\scr club\3.jpg" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-gray-900 transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="assets\js\pages\css\image\prof.jpg" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
                                </div>
                                <div class="ml-3">
                                    <a href="Club-author.html" class="text-sm font-medium text-white">NAJI AYSAR</a>
                                    <p class="text-xs text-white">Software Engineering</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>



        </div>



        <ul class="flex justify-center gap-2 mt-8">
            <!-- Left Arrow (Disabled state) -->
            <li class="w-12 h-12 text-center border rounded-full cursor-not-allowed border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                <a href="javascript:void(0)" tabindex="-1" class="block text-2xl leading-[3rem] text-white">
                    &#xab; <!-- HTML entity for double left arrow -->
                </a>
            </li>
            <!----#23242A backround--->
            <!----#323741 div-secoin--->
            <!----#424650 strok--->
            <!----#827FFF selec--->
            <!-- Page Numbers -->
            <li class="w-12 h-12 text-center text-white transition-colors duration-300 border rounded-full cursor-pointer bg-[#2A2D35] hover:bg-[#827FFF]">
                <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">1</a>
            </li>
            <li class="w-12 h-12 text-center text-gray-900 transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">2</a>
            </li>
            <li class="w-12 h-12 text-center text-gray-900 transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">3</a>
            </li>
            <li class="w-12 h-12 text-center text-gray-900 transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">4</a>
            </li>
            <!-- Right Arrow -->
            <li class="w-12 h-12 text-center transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                <a href="javascript:void(0) " class="block text-2xl leading-[3rem] text-white">
                    &#xbb; <!-- HTML entity for double right arrow -->
                </a>
            </li>
        </ul>

    </main>




</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="js\mian.js"></script>
</body>
</html>
