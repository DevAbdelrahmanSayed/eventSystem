<!DOCTYPE html>
<html lang="en">

@include('layout.head')


<body class="bg-[#23242A]">

<div class="antialiased bg-[#23242A] ">
@include('layout.dashboard')

    <main class="p-4  md:ml-64 h-auto pt-20">


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
                    <input type="text" name="email" id="topbar-search" class="bg-[#1E1F25] border border-[#424650] text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full pl-10 p-2.5  dark:placeholder-white text-white dark:focus:ring-primary-500 dark:focus:border-[#827FFF]" placeholder="Search" />
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
                            <img src="{{asset('assets/image/scr.jpg')}}" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="{{route('showClub.index')}}" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('assets/image/prof.jpg')}}" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
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
                            <img src="{{asset('assets/image/scr.jpg')}}" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('assets/image/prof.jpg')}}" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
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
                            <img src="{{asset('assets/image/scr.jpg')}}" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('assets/image/prof.jpg')}}" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
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
                            <img src="{{asset('assets/image/scr.jpg')}}" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('assets/image/prof.jpg')}}" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
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
                            <img src="{{asset('assets/image/scr.jpg')}}" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                        </figure>
                        <div class="p-4 bg-[#333333]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('assets/image/prof.jpg')}}" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
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


@include('layout.scripts')

</body>
</html>
